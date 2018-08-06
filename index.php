<!DOCTYPE html>
<html>
<head>
	<title>굥임이네 프로젝투 ㅇㅂㅇ</title>
    <script>

        function getExtensionFile(){

            var fileName = document.getElementById('file').value;

            alert(fileName);
            var fileLength = fileName.length;
            alert(fileLength);
            var extenLocate = fileName.lastIndexOf('.');
            alert(extenLocate);
            var fileExten = fileName.substring(extenLocate+1, fileLength).toLowerCase();
            alert(fileExten);

            switch (fileExten){
                case 'jpg':
                case 'jpeg':
                case 'png':
                case 'gif':
                case 'hwp':
                case 'pptx':
                case 'pptm':
                case 'xls':
                case 'xlsx':
                case 'xlsm':
                case 'doc':
                case 'docs':
                case 'docx':
                case 'pdf':
                case 'zip':
                    return true;

                default:
                    return false;
            }

        }


    </script>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return getExtensionFile()">
        <table width="600" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
            <tr> 
                <td colspan="2" bgcolor="#FFFFFF">파일업로드 기능 구현</td>
            </tr> 
        
            <tr> 
                <td width="150" align="center" bgcolor="#FFFFFF">업로드 파일</td>
                <td width="464" bgcolor="#FFFFFF"><input type="file" id="file" name="myFile" size="50"/></td>
            </tr> 
            
            <tr> 
                <td colspan="2" bgcolor="#FFFFFF">
                    <input type="submit" value="파일 업로드"/>
                    <input type="reset" value="취소" />
                </td> 
            </tr> 
        </table> 
    </form>
</body>

</html>