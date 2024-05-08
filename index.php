 <?php
    session_start();    ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four in one</title>
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        header {
    background-color: rgba(96, 125, 139, 1);
    color: #C8B560;
    padding: 10px 20px;
    display: flex;
    justify-content: flex-end; /* تحديد بداية العناصر من اليمين */
    align-items: center;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}


        header h1 {
            font-size: 36px;
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
                direction: rtl;
            
        }

        nav ul li {
            display: inline;
           
            text-align: right;
        }

        nav ul li:first-child {
            
            text-align: right;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav ul li a span {
    color: #C8B560; /* لون خط النص */
    font-size: 34px; /* حجم الخط */
    border-radius: 5px;
}


        nav ul li a:hover {
            background-color: rgb(114, 193, 178);
            color: #f8fcfd;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero {
    background-image: url('img/hero.jpg');
    background-size: 100% 80%; /* تغطية العرض والارتفاع بالكامل */
    color: #fff;
    text-align: center;
    padding: 100px 0;
    font-family: 'Cairo', Tahoma, Geneva, Verdana, sans-serif;
}


        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .hero button {
    background-color: #fff;
    font-family: 'Cairo', Tahoma, Geneva, Verdana, sans-serif;
    color: #320fbc;
    border: none;
    padding: 0px 20px;
    font-size: 18px;
    border-radius: 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 100px;
}

.hero button:hover {
    background-color: #0056b3;
}


        main {
            padding: 40px 20px;
        }

        footer {
            background-color: rgba(96, 125, 139, 1);
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        /* Responsive Styles */
@media screen and (max-width: 768px) {
    header {
        padding: 10px;
    }

    header h1 {
        font-size: 24px;
    }

    nav ul li {
        display: block;
        margin: 10px 0;
    }

    nav ul li:first-child {
        margin-top: 0;
    }

    nav ul li a {
        padding: 10px;
    }

    .hero h2 {
        font-size: 36px;
    }
}

    </style>
</head>
<body>
    <?php
   // session_start();     
    include('header.php');?>

    <section class="hero">
        <h2>   </h2>
        <?php
        if(isset($_SESSION['email']) && isset($_SESSION['email'])) {
             // عرض رابط الخروج إذا كانت متغيرات الجلسة غير خالية
    
             echo '<button><a href="logout.php">تسجيل الخروج</a></button>';
         } else {
             // عرض رابط تسجيل الدخول إذا كانت متغيرات الجلسة خالية
             echo '<button><a href="login.php">تسجيل الدخول</a></button>';
         }
         ?>
        
    </section>
    
    <main>
        <!-- يمكنك إضافة محتوى الموقع الرئيسي هنا -->
    </main>

    <footer>
        <p>جميع الحقوق محفوظة &copy; 2024 Four in one</p>
    </footer>
</body>
</html>
