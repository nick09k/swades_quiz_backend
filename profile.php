<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>



<nav class="navbar sticky-top navbar-expand-lg navbar-dark " >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
    <form class="form-inline my-2 my-lg-0">
     
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Welcome : <i><?php echo $login_session; ?></button>
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">Log Out</a></button>
    </form>
   
  </div>
</nav>

 <button onclick="setTimeout(myFunction, 3600000)">start test</button>
    <p id="demo"></p>
<div id="txt"></div>

  </div>




<div class="container">
 <form action="sub.php" method='post' >

  CASE STUDY 1
Dr. Pritpal Singh sits in his simple office in the Baba Farid Center for Special Children, located in the small town of Faridkot, in India’s Punjab region. Since 2003, Dr. Singh has been here, working with fellow health professionals at the center, offering therapeutic treatment to a growing number of young children from local areas being born with mental and health disabilities. He set up the center in response to his growing concerns about the severity of illnesses he was witnessing in his own community, especially those affecting children.</br>
Since the green revolution in the 1960’s ,It is suspected however that fifty years of increased productivity has been fuelled by the excessive use of fertilisers, pesticides and insecticides that have resulted in a slow accumulation of toxins within the water, soil, food and ultimately people, of the region. In 2009, a Greenpeace report found that water from local wells in Faridkot contained dangerously high levels of nitrates, suspected to be from the overuse of synthetic nitrate fertilisers in surrounding agricultural land.</br>
A farmer was quoted saying “It started from 1995, due to the cotton belt. The American bollworm was the problem. In three months they were spraying every three days. The recommended amount is three to four times in three months. The pesticide companies recommended we use more. We were using these without hand gloves or masks. Health problems started from 1997-98. People started to get many types of cancer.”</br>
</br>
  
      Q1.Choose among the following people, who is most suitable for social entrepreneurship?</br>
      </br>
      <input type="checkbox" name="answer1" value="a">a)  Literate person without resources.</br>
      <input type="checkbox" name="answer1" value="b">b)  Illiterate person with resources.</br>
      <input type="checkbox" name="answer1" value="c">c)  Literate person with idea for social development.</br>
      <input type="checkbox" name="answer1" value="d">c)  Literate person with idea for social development.
      </br>

      </br>
      </br></br>
      Q.2 According to you, what is a positive sign for a society?</br>
      <input type="checkbox" name="answer2" value="a">(a) Economically Stable</br></br>
<input type="checkbox" name="answer2" value="b">(b) Quality Lifestyle</br>
<input type="checkbox" name="answer2" value="c">(c) Employment</br>
<input type="checkbox" name="answer2" value="d">(d) High Literacy rate
  </br>
   
      </br>
      </br>
      Q3  Which of the following is NOT something that a small business owner should do to manage
       a culturally diverse workforce successfully?</br></br>
<input type="checkbox" name="answer3" value="a">A)  Learn to recognize and correct other's biases and stereotypes.</br>
<input type="checkbox" name="answer3" value="b">B)  Avoid making invalid assumptions.</br>
<input type="checkbox" name="answer3" value="c">C)  Concentrate on communication.</br>
<input type="checkbox" name="answer3" value="d">D) Continue to adjust your company to your workers. </br>  

      </br></br>
      </br>
      Q4  Azman has come to you for advice on starting a business venture. He wants to know the
       best way to gain the experience he will need. You suggest that he ________.</br></br>
<input type="checkbox" name="answer4" value="a">A)  read a small business book.</br>
<input type="checkbox" name="answer4" value="b">B)  seek knowledge and experience in the field he wishes to enter.</br>
<input type="checkbox" name="answer4" value="c">C)  determine his weaknesses and return to school for a term or two.</br>
<input type="checkbox" name="answer4" value="d">D)  just jump in and learn as he goes.</br>
  
    
</br>
</br>
</br>
    CASE STUDY 2
Dr. Pritpal Singh sits in his simple office in the Baba Farid Center for Special Children, located in the small town of Faridkot, in India’s Punjab region. Since 2003, Dr. Singh has been here, working with fellow health professionals at the center, offering therapeutic treatment to a growing number of young children from local areas being born with mental and health disabilities. He set up the center in response to his growing concerns about the severity of illnesses he was witnessing in his own community, especially those affecting children.</br></br>
Since the green revolution in the 1960’s ,It is suspected however that fifty years of increased productivity has been fuelled by the excessive use of fertilisers, pesticides and insecticides that have resulted in a slow accumulation of toxins within the water, soil, food and ultimately people, of the region. In 2009, a Greenpeace report found that water from local wells in Faridkot contained dangerously high levels of nitrates, suspected to be from the overuse of synthetic nitrate fertilisers in surrounding agricultural land.</br>
A farmer was quoted saying “It started from 1995, due to the cotton belt. The American bollworm was the problem. In three months they were spraying every three days. The recommended amount is three to four times in three months. The pesticide companies recommended we use more. We were using these without hand gloves or masks. Health problems started from 1997-98. People started to get many types of cancer.”</br></br></br>
Q 5   Choose among the following people, who is most suitable for social entrepreneurship?</br></br>
   <input type="checkbox" name="answer5" value="a"> a)  Literate person without resources.</br>
      <input type="checkbox" name="answer5" value="b">b)  Illiterate person with resources.</br>
     <input type="checkbox" name="answer5" value="c"> c)  Literate person with idea for social development.</br>
     <input type="checkbox" name="answer5" value="d"> d) Illiterate person without any idea.</br>
Q.6 According to you, what is a positive sign for a society?</br></br>

<input type="checkbox" name="answer6" value="a">(a) Economically Stable</br>
<input type="checkbox" name="answer6" value="b">(b) Quality Lifestyle</br>
<input type="checkbox" name="answer6" value="c">(c) Employment</br>
<input type="checkbox" name="answer6" value="d">(d) High Literacy rate</br>
Q7.Which of the following is NOT something that a small business owner should do to manage a
culturally diverse workforce successfully?</br></br>
<input type="checkbox" name="answer7" value="a">A)  Learn to recognize and correct other's biases and stereotypes.</br>
<input type="checkbox" name="answer7" value="b">B)  Avoid making invalid assumptions.</br>
<input type="checkbox" name="answer7" value="c">C)  Concentrate on communication.</br>
<input type="checkbox" name="answer7" value="d">D) Continue to adjust your company to your workers.   </br>
Q8.Which of the following is NOT something that a small business owner should do to manage a
culturally diverse workforce successfully?</br></br>
<input type="checkbox" name="answer8" value="a">A)  Learn to recognize and correct other's biases and stereotypes.</br>
<input type="checkbox" name="answer8" value="b">B)  Avoid making invalid assumptions.</br>
<input type="checkbox" name="answer8" value="c">C)  Concentrate on communication.</br>
<input type="checkbox" name="answer8" value="d">D) Continue to adjust your company to your workers. </br>  

  </br>
  </br>
  </br>
  </br>
  </br>
PART 2:Descriptive questions:</br></br>
Q1 “Business entrepreneurs tend to focus on new needs, while social entrepreneurs tend to focus on existing environmental and social problems more effectively on long-term goals through new approaches. ”
Explain the above statement, supporting your idea of social entrepreneurship. As a social entrepreneur, what is success for you? </br></br>
<textarea rows="8" cols="60" name="des1">Enter Yor Answer ...</textarea> 
</br>
</br>

Q2  “Good intentions are certainly enough for a philanthropist, however not for a social entrepreneur.”
With reference to the above statement, what key factors can motivate the youth to take a step towards social entrepreneurship?
entrepreneurship. As a social entrepreneur, what is success for you?</br>
</br> 
<textarea rows="8" cols="60" name="des2">Enter Yor Answer ...</textarea> 
</br></br>


<input type="submit" value="Submit" name="submit">
</form>

</div>









<script>
var myVar;
 
var currentdate = new Date(); 
var datetime = "Last Sync: " 
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
document.getElementById("demo").innerHTML = datetime.toString();
var phone=0;
function myFunction() {
 window.open("logout.php","_self")
  $.get("index.php");
  var done=0;

}
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}



</script>


</body>
</html>