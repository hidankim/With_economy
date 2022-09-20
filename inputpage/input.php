<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>Input01</title>
</head>
<body>
    <div class="main">
      <div class="loader" id="loader"></div>
      <div class="home-button">
        <a href="login.html">
          <img src="./pictures/home button 7476c0.png">
        </a>
      </div>

        <div class="content-wrap">
          <div class="content-right">
            <p id="content"></p>
          </div>
        </div>


        <div class="content-left">
          <div class="todo-wrap">
              <form action="mysql_input.php?ver=1" method="post">
                <div class="container" id="container">
                      <h1>Add Task</h1>

                      <div>
                      <label for="subject"><b>과목</b></label>
                      <input type="text" name="subject" required>
                      </div>

                      <div>
                      <label for="date"><b>날짜</b></label>
                      <input type="date" name="date" required>
                      </div>

                      <div>
                      <label for="period"><b>교시</b></label>
                      <select name="period" required>
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                        <option value="six">6</option>
                        <option value="seven">7</option>
                        <option value="eight">8</option>
                        <option value="other">외</option>
                      </select>
                      </div>

                      <div>
                      <label for="name"><b>제목</b></label>
                      <input type="text" name="name" required>
                      </div>

                      <div>
                      <label for="info"><b>정보</b></label>
                      <input type="text" name="info" required>
                      </div>

                      <div>
                      <button type="submit" id="submitBtn">제출</button>
                      </div>
                </div>
              </form>
          </div>
        </div>
      </div>
      <script defer src="./input.js"></script>
</body>
</html>