<?php
//数据库设置
/*
$dbhost="localhost";
$dbuser="root";
$dbpassword="123";
$dbdatabase="sunday";
*/
//项目设置
$config_blogname="iSunday";
$config_author="NN";
$config_basedir="http://3.isunday.sinaapp.com";

error_reporting(0);
ob_start();
session_start();

//SAE
$db = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
mysql_select_db(SAE_MYSQL_DB,$db);
mysql_query("set names utf8;");

if($_POST['submit']){
    if(empty($_POST['subject'])){
        echo "<script>alert('标题！标题！被你吃了吗！');</script>";
    }elseif(empty($_POST['body'])){
        echo "<script>alert('少侠！您不想说点什么吗？');</script>";
    }else{
    	$sql = "INSERT INTO nn_articles(catId,title,content,created,modified,visits,authorId)
                VALUES('" .$_POST['cat']."','".$_POST['subject']."','".$_POST['body']."',NOW(),NOW(),'1','0');";
    	mysql_query($sql);
    	header("Location:".$config_basedir);
    }
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="./public/css/main.css">
<script src="./public/js/jquery.min.js"></script>
<script src="./public/js/focus.js"></script>
<script src="./public/js/youtube.js"></script>
<!--##-->
<link rel="stylesheet" type="text/css" href="./public/css/iconfonts.css">
<link rel="stylesheet" href="./public/css/editor.css" />
<script type="text/javascript" src="./public/js/editor.js"></script>
<script type="text/javascript" src="./public/js/marked.js"></script>
<!--##-->
<section class="clearfix">
    <div class="eight columns">
        <blockquote><h2>Add new entry</h2></blockquote>
        <form class="form-entry" action="" method="post">
            <p>Subject</p>
            <input id="setFocus" class="ipt-subject" type="text" name="subject" />
            <p>Body</p>
            <textarea name="body" ></textarea>
            <!--##-->
            <script type="text/javascript">
                var editor = new Editor();
                editor.render();
                // editor.codemirror.getValue();
            </script>
            <!--##-->
            <p style="float:left;">Category -> </p>
            <select style="float:left;margin:15px 0 0 5px;" name="cat">
                <?php 
                $catSQL = "SELECT * FROM nn_categories;";
                $catRES = mysql_query($catSQL);
                while($catROW = mysql_fetch_assoc($catRES)){
                    echo "<option value='".$catROW['id']."'>".$catROW['cat']."</option>";
                }
                ?>
            </select>

            <input style="float:right;margin:5px 0;width:100px;" type="submit" name="submit" value="Launch" />
        </form>

    </div>
</section>
<div class="sec-bg"><img src="public/images/sec_bg.png"></div>
