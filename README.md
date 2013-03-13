FGuestBook 
===============================================
A guestbook by flash.

Change Log
===============================================

* [2009/07/13]開始製作.
* [2009/07/14]完成顯示頁面,並於官網貼上第一篇文章.
* [2009/07/15]更新顯示頁面,正式命名為 FGuestBook(Flash Guest Book)
* [2009/07/18]完成與新增基礎管理介面,版面更新,於官網正式發表.
* [2010/02/03]新增編輯留言,修正安全性問題.
* [2010/04/12]修復編輯帳號功能.
* [2010/12/03]更改密碼存取方式，提高安全性。檔案名稱更改 GB.swf -> index.swf

安裝
===============================================

- 解開壓縮包，將upload資料夾上傳至您的網站
- 建立一個新的資料庫之後複製或上傳fguestbook.sql檔案至phpMyAdmin中並執行其中的語法。
- 修改connectdb.php，將 mysql_connect('localhost','db_username','db_password')
  db_host改為您資料庫主機的位置(通常為localhost)
  db_username改為您登入資料庫的帳號
  db_password則為資料庫登入密碼
  再將下一行的mysql_select_db("db_name")中的db_name改為您的資料庫名稱。
- 完成！
- 管理員預設帳號: admin 密碼:manager

如果要在自己的主機上測試，請在讀取的網址前加上http://主機位置(通常是localhost)/放置本程式的位置/

例如：
myXML.load("datatoxml.php?n="+random(9999));

改成
myXML.load("http://localhost/fguestbook/datatoxml.php?n="+random(9999));

解除安裝 
===============================================

- 刪除全部檔案
- 刪除資料庫