    <?php
    // التحقق من أن البيانات تم إرسالها بطريقة POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // التحقق من وجود البيانات في $_POST قبل الوصول إليها لتجنب الأخطاء
        if (isset($_POST['data_to_save'])) {
            $data = $_POST['data_to_save'];
            $file = 'saved_data.txt'; // اسم الملف الذي سيتم التخزين فيه

            // كتابة البيانات في نهاية الملف. إذا لم يكن الملف موجودًا، فسيتم إنشاؤه.
            file_put_contents($file, $data . PHP_EOL, FILE_APPEND | LOCK_EX);
            echo "تم حفظ البيانات بنجاح!";
        } else {
            echo "لم يتم العثور على بيانات في الطلب.";
        }
    } else {
        echo "هذا السكريبت يجب استدعاؤه عبر طلب POST.";
    }
    ?>