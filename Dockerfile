# استخدام خادم Apache مع إصدار PHP 8.2
FROM php:8.2-apache

# تثبيت متطلبات النظام الأساسية
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo_mysql zip

# تفعيل خاصية الروابط في خادم Apache (مهم جداً للارافل)
RUN a2enmod rewrite

# توجيه الخادم لقراءة مجلد public الخاص بلارافل مباشرة
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# تثبيت برنامج Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ جميع ملفات المشروع إلى الخادم
COPY . /var/www/html/

# إعطاء صلاحيات الكتابة لمجلدات التخزين
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# تثبيت مكتبات لارافل
RUN composer install --optimize-autoloader --no-dev

# فتح المنفذ 80 للإنترنت
EXPOSE 80