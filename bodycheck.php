<html>
    <head>
        <title>
            BCA REGISTRATION
        </title>
    </head>
    <body>
        <form action="bodycheckup.php" method="post">
            <p>
            <label for="NAME">PLEASE ENTER YOUR NAME=></label>
            <input type="text" name="NAME" required>
            </p>
            <p>
            <label for="AGE">PLEASE ENTER YOUR AGE=></label>
            <input type="number" name="AGE" required>
            </p>
            <p>
            <label for="GENDER">PLEASE ENTER YOUR NAME=></label>
            <input type="radio" name="GENDER" value="MALE">MALE
            <input type="radio" name="GENDER" value="FEMALE">FEMALE
            </p>
            <p>
            <label for="WEIGHT">PLEASE ENTER YOUR WEIGHT=></label>
            <input type="number" name="WEIGHT" required>
            </p>
            <p>
            <label for="HEIGHT">PLEASE ENTER YOUR HEIGHT IN CM'S=></label>
            <input type="number" name="HEIGHT" required>
            </p>
            <p>
            <label for="meal">WHICH TYPE OF MEAL SHOULD BE HEAVIEST DURING THE WHOLE DAY</label>
            <input type="radio" name="MEAL" value="BREAKFAST">BREAKFAST  
            <input type="radio" name="MEAL" value="MIDDAY">MIDDAY   
            <input type="radio" name="MEAL" value="DINNER">DINNER   
            </p>
            <p>
            <label for="BREAKFAST">PLEASE SELECT THE BEST TIME FOR BREAKFAST</label>
            <select name="BREAKFAST">
                <option value="" disabled selected>PLEASE SELECT THE ADEQUATE TIME</option>
                <option value="8:00-9:00" >8:00-9:00</option>
                <option value="9:00-10:00" >9:00-10:00</option>
                <option value="10:00=11:00" >10:00=11:00</option>
                <option value="11:00-12:00" >11:00-12:00</option>
            </select>    
            </p>
            <input type="submit" value="SUBMIT THE FORM">
        </form>
    </body>
</html>