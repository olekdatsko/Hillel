<?php
// виправлення коду що зараз відповідає принципам OCP та SRP, функціонал розділений на окремі класи,
// кожен має конкретну відповідальність

// Oбробка замовлень
class OrderProcessor
{
    public function processOrder(Order $order)
    {
        $order->process();
    }
}

abstract class Order
{
    protected string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    abstract public function process();
}

// Клас для замовлення товару
class ProductOrder extends Order
{
    public function process()
    {
// Обробка замовлення на товар
        $this->generateReport('order with type product', 'pdf');
    }
}

// Замовлення послуги
class ServiceOrder extends Order
{
    public function process()
    {
// Обробка замовлення на послугу
        $this->generateReport('order with type service', 'csv');
    }
}

// Клас для замовлення доставки
class DeliveryOrder extends Order
{
    public function process()
    {
// Обробка замовлення на доставку
        $this->generateReport('order with type delivery', 'pdf');
    }
}

// Клас для генерації звітів
class ReportGenerator
{
    public function generateReport(string $data, string $format)
    {
        if ($format === 'pdf') {
        } elseif ($format === 'csv') {
        }
    }
}

//
//Друга частина
//
class DataManager
{
    public function saveData($data)
    {
        // Логіка збереження даних в базі даних
    }
}

// Відображення даних на веб-сторінці
class DataDisplay
{
    public function displayData($data)
    {
        // Логіка відображення даних на веб-сторінці
    }
}

// Аутентифікація юзера
class UserAuthenticator
{
    public function authenticate(string $username, string $password, string $role)
    {
        // Логіка аутентифікації користувача
    }
}

// Відображення профілю користувача
class UserProfile
{
    public function displayProfile(int $userId)
    {
        // Логіка відображення профілю користувача
    }
}

// Робота з файлами
class FileManager
{
    public function readFile(string $filename)
    {
        // Читання файлу з урахуванням розширення
    }

    public function writeFile(string $filename, $data)
    {
        // Запис даних в файл з урахуванням розширення
    }
}

// Оновлений клас для обробки замовлень
class OrderProcessor
{
    public function processOrder($orderData)
    {
        // Логіка обробки замовлення
    }
}

// Клас для відображення інформації про замовлення
class OrderInfoDisplay
{
    public function displayOrderInfo(int $orderId)
    {
        // Логіка відображення інформації про замовлення
    }
}
