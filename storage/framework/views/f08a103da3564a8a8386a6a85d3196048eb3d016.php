<?php $__env->startSection('content'); ?>
<div>
    <br>
    <h2>Журнал обновлений</h2>
    <br>
    <h4>Обновление 0.09 beta от 15.02.2023</h4>
    <ul class="list-group">
        <li class="list-group-item">
            1. Исправлена ошибка из-за которой не приходили смс на Теле-2
        </li>
    </ul>
    <br>
    <h4>Обновление 0.1 beta от 15.03.2023</h4>
    <ul class="list-group">
        <li class="list-group-item">
            1. Исправлена ошибка из-за которой данные подключений не добавлялись в БД<br>
            2. Исправлена ошибка из-за которой данные дублировались в БД<br>
            3. Таблица с подключениями отсортирована по убыванию даты<br>
            4. Добавлена нумерация клиентов в таблице
        </li>
    </ul>
    <br>
    <h4>Обновление 0.11 beta от 07.04.2023</h4>
    <ul class="list-group">
        <li class="list-group-item">
            1. Добавлена возможность просмотра количества отправленных сообщений(бета-версия, подсчет сообщений начнется с 01.05.2023)<br>
            2. Добавлена возможность выгрузить статистику подключений в Excel
        </li>
    </ul>
    <br>
    <h4>Обновление 0.2 beta от 24.04.2023</h4>
    <ul class="list-group">
        <li class="list-group-item">
            1. Переделан способ отправки авторизационных сообщений<br>
        </li>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/hotspotdb/resources/views/update.blade.php ENDPATH**/ ?>