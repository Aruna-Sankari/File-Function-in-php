<html>
<head>
<title>File Function</title>
</head>
<body>
<h4><u>FILE FUNCTIONS</u></h4>
    <h5>1.IS_WRITABLE()</h5>
    <?php
    if (file_exists('file.php')) {
        if (is_writable('file.php')) {
            echo "File is Writable";
        } else {
            echo "File does not exist";
        }
    }
    echo "<br><br>";
    ?>

    <?php
    if (file_exists('file.php')) {
        if (is_writable('file1.php')) {
            echo "File is Writable";
        } else {
            echo "File does not exist";
        }
    }
    ?>

    <h5>2.UNLINK()</h5>
    <?php
    if (file_exists("file1.php")) {
        if (unlink('file1.php')) {
            echo "File Deleted Successfully";
        } else {
            echo "File does not exists";
        }
    }
    ?>

    <h5>3.STAT()</h5>
    <?php
    if (file_exists("file.php")) {
        print_r(stat("file.php"));
    } else {
        echo "file does not exists";
    }
    ?>

    <h5>4.RMDIR()</h5>
    <?php
    if (file_exists('sample')) {
        if (rmdir('sample')) {
            echo "Directory Removed Successfully";
        } else {
            echo "Directory Not Found";
        }
    }
    ?>

    <h5>5. TO RENAME TO FILE()</h5>
    <?php
    if (file_exists("file.php")) {
        if (rename("file.php", "new.php")) {
            echo "renamed file successfully";
        } else {
            echo "File does not exists";
        }
    }
    ?>

    <h5>6.TO RENAME THE DIRECTORY()</h5>
    <?php
    if (file_exists("new")) {
        if (rename("new", "sample")) {
            echo "directory renamed successfully";
        } else {
            echo "File does not exists";
        }
    }
    ?>

    <h5>7.REALPATH()</h5>
    <?php
    if (file_exists("new.php")) {
        echo "File Path:" . realpath("new.php");
    } else {
        echo "file does not exists";
    }
    ?>

    <h5>8.READARRAY()</h5>
    <?php
    $read = file("new.php") or die("cannot find file");
    foreach ($read as $a) {
        echo $a;
    }
    ?>

    <h5>9.READABLE()</h5>
    <?php
    if (file_exists("new.php")) {
        if (is_readable("new.php")) {
            echo "File is Readable";
        } else {
            echo "file does not exists";
        }
    }
    echo "<br><br>";
    ?>
    <?php
    if (file_exists("new.php")) {
        if (is_readable("new1.php")) {
            echo "File is Readable";
        } else {
            echo "file does not exists";
        }
    }
    ?>

    <h5>10.READ FILE()</h5>
    <?php
    $read = file_get_contents("new.php") or die("cannot find file");
    echo $read;
    ?>

    <h5>11.PATHINFO()</h5>
    <?php
    if (file_exists("new.php")) {
        print_r(pathinfo("new.php"));
    } else {
        echo "file does not exist";
    }
    ?>

    <h5>12.MKDIR()</h5>
    <?php
    if (!file_exists("sample")) {
        if (mkdir("sample")) {
            echo "Directory Created Successfully";
        } else {
            echo "already exists";
        }
    }
    ?>

    <h5>13.IS_DIR() & IS_FILE()</h5>
    <?php
    if (file_exists("sample")) {
        if (is_dir("sample")) {
            echo "It is a directory" . "<br><br>";
        }
        if (is_file("new.php")) {
            echo "It is a file";
        }
    } else {
        echo "file does not exists";
    }

    ?>

    <h5>14.FILESIZE()</h5>
    <?php
    if (file_exists("new.php")) {
        echo filesize("new.php") . " bytes";
    } else {
        echo "File not found";
    }
    ?>

    <h5>15.COPY()</h5>
    <?php
    if (file_exists("new.php")) {
        if (copy("new.php", "file.php")) {
            echo "copied successfully";
        } else {
            echo "File does not exists";
        }
    }
    ?>

    <h5>16.IS_EXECUTABLE()</h5>
    <?php
    if (file_exists("file.php")) {
        if (is_executable("file.php")) {
            echo "File is executable";
        } else {
            echo "File is not executable";
        }
    } else {
        echo "file does not exists";
    }
    ?>

    <h5>17.FILE_APPEND()</h5>
    <?php
    $string = "Hic ex optio mollitia! In delectus aliquam assumenda doloribus laudantium nobis dolorum consequatur cupiditate placeat quibusdam reiciendis ipsam, porro quaerat quia sapiente aspernatur vel, nemo ipsum? Atque earum assumenda non.
    Provident adipisci et totam esse velit voluptas maiores error, aspernatur tempora vitae repudiandae quod veniam perferendis quas ratione natus ipsum pariatur, dolorem praesentium odio numquam distinctio, recusandae voluptatem. Voluptatibus, repellendus.";
    file_put_contents("new.php", $string, FILE_APPEND);
    echo "String Written to file";
    ?>

    <h5>18.FILE_EXISTS()</h5>
    <?php
    if (file_exists("file.php")) {
        $str = file_get_contents("file.php");
        echo $str;
    } else {
        echo "File does not exists";
    }
    ?>

    <h5>19.WRITE FILE()</h5>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, quam cum, quis laboriosam veniam recusandae explicabo dolores autem voluptates rem voluptatum asperiores est officiis eius tenetur? Amet assumenda delectus fuga.
    Possimus distinctio ut soluta, ea deserunt repellendus placeat";
    file_put_contents("file.php", $str);
    echo "string written to file";
    ?>
	</body>
	</html>