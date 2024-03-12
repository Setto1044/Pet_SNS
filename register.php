<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src = "./js/login.js"></script>
  <title>WhyNabong SNS</title>

  <style>
    h1{
      font-size: 50px;
      color : white;
    }
    h2{
      font-size: 40px;
      color : white;
    }
    h3{
      font-size: 20px;
      color : black;
    }
    h4{
      font-size: 15px;
      color : white;
    }
    table.logtable {
      border: ;
      border-collapse: collapse;
      text-align: left;
      width: 100px;
      height: 20px;
      line-height: 10px;
      border-left: 3px ;
      margin : 10px 10px;
    }
    a{
      text-decoration-line: none;
    }

  </style>
</head>

<body bgcolor="F5EFFB">
  <!-- 로그인 전체디자인 -->
  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100">
   <tr>
    <!-- 윗 로고 사진 -->
    <td align="center" bgcolor="#CCCCCFF" style="padding: 5px 5px 5px 5px;">
      <img src="whynab.png"  width="150" height="160" style="display: block;" />
    </td>
    <td>
      <!-- 윗 로고 사이트명, 하이퍼링크-->
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="50" bgcolor="#CCCCCFF" style="padding: 10px 50px 10px 50px;">
        <tr>
          <td align="center" >
            <a href="log_in.html">
              <img src="mainlogo.png"  width="400" height="340" style="display: block;" />
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <!-- 회원가입 박스 -->
      <td align="left" bgcolor="#FFFFF9" style="padding: 5px 5px 5px 5px;" colspan="2">

        <form name = "member_register" method="post" action="register_check.php">
          <h3>회원가입</h3>

          <table class="logtable">
            <tr>
              아이디<br>
              <input type="text" name="id" placeholder="아이디 입력" >

              <br>비밀번호<br> 
              <input type="password" name="pass" placeholder="비밀번호 입력">

              <br>비밀번호 재확인<br>
              <input type="password" name="pass_again" placeholder="비밀번호 입력">
              <input type="button" value="확인" onclick="pw_match()">

              <br>사용자 이름<br>  
              <input type="text" name="name" >

              <br>이메일<br>  
              <input type="text" name="email1">@
              <select name="email2">
                <option value = "naver.com">naver.com</option>
                <option value = "koreatech.ac.kr">koreatech.ac.kr</option>
                <option value = "gmail.com">gmail.com</option>
               </select>

              <br>반려동물 이름<br>  
              <input type="text" name="petName" placeholder="없다면 공백">

              <br>활동 방향<br>
              <input type="radio" name="state" value="dog" checked="">강아지 주인<br>
              <input type="radio" name="state" value="cat">고양이 주인<br>
              <input type="radio" name="state" value="nothing">반려동물 없음<br>        
            </table>
          </td>
        </tr>
        <tr>
          <td bgcolor="#CC99CC" colspan="2">
            <input type="button" value="확인" onclick="check_register_input()" style="margin: 5px">
            <button type="button" onclick= "window.location.reload()">입력취소</button>
          </tr>
        </form>
      </td>
    </tr>
  </table>
</body>
</html>