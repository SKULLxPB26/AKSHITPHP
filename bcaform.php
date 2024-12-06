<html>
    <head>
        <title>BCA REGISTRATION FORM</title>
    </head>
        <body>
            <form action="bcaform1.php" method="post">
                <p>
                    <label for="NAME">PLEASE ENTER YOUR NAME:</label>
                    <input type="text" name="NAME" required>
                </p>
                <p>
                    <label for="12thYEAR">PLEASE ENTER THE YEAR YOU PASSED YOUR 12th CLASS:</label>
                    <input type="number" name="12thYEAR" required>
                </p>
                <p>
                    <label for="PERCENTAGE">PLEASE ENTER YOUR 12th PERCENTAGE:</label>
                    <input type="number" name="PERCENTAGE" required>
                </p>
                <p>
                    <label for="EXTRASUBJECT">PLEASE SELECT YOUR EXTRA SUBJECT:</label>
                    <select name="EXTRASUBJECT">
                        <option value="" disabled selected>PLEASE SELECT THE ADEQUATE SUBJECT</option>
                        <option value="PHYSICAL EDUCATION">PHYSICAL EDUCATION</option>
                        <option value="PUNJABI">PUNJABI</option>
                        <option value="HINDI">HINDI</option>
                        <option value="URDU">URDU</option>
                        <option value="SANSKRIT">SANSKRIT</option>
                        <option value="MUSIC">MUSIC</option>
                        <option value="DRAWING">DRAWING</option>
                     </select>
                </p>
                <p>
                    <label for="HOSTEL">PLEASE SELECT WHETHER YOU WANT TO APPLY FOR HOSTEL:</label>
                    <input type="radio" name="HOSTEL" value="YES">YES
                    <input type="radio" name="HOSTEL" value="NO">NO
                </p>
                <p>
                    <label for="LANGUAGE">PLEASE SELECT YOUR PREFERRED STARTING LANGUAGE(S):</label>
                    <input type="checkbox" name="LANGUAGE" value="ON">JAVA
                    <input type="checkbox" name="LANGUAGE" value="ON">C++
                    <input type="checkbox" name="LANGUAGE" value="ON">C
                    <input type="checkbox" name="LANGUAGE" value="ON">PYTHON
                    <input type="checkbox" name="LANGUAGE" value="ON">PHP
                </p>
                <input type="submit" value="submit">
            </form>
        </body>
</html>
