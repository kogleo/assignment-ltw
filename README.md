# LT_Web
Web Programming (CO3050)-DH_HK211 assignment project

Author: Nguyễn Hoàng Minh Châu, Phạm Ngọc Hậu, Trương Hoàng Phúc, Trương Gia Thịnh.

## Instruction

### Setup file

    git clone https://github.com/remsokawaii1/LT_Web.git
    cd LT_Web 

### Change document root of XAMPP to folder contain LT_Web

### Import database from `./database/ltweb.sql`

### Change database connection's informations
Update informations of your connection in `./mvc/core/DB.php`

```php
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "ltweb";
```

### Go to browser
* [Guest and Member role](http://localhost/LT_web/home)
* [Admin role](http://localhost/LT_web/admin) (username: admin, password: 12345)

## Learn More
You can learn more in our [Github Repository](https://github.com/remsokawaii1/LT_Web).
