        <!--<a id="anchor-login-4"></a>
        <div class="corner-subcontent-top"></div>
        <div class="subcontent-box">
          <h1 class="login">Login</h1>
          <div class="loginform">
            <p id="error">{$errore}</p>
            <br />
            <form method="post" action="index.php?controller=clogin">
              <p><input type="hidden" name="controller" value="registrazione" /></p>
              <p><input type="hidden" name="task" value="autentica" /></p>
              <fieldset>
                <p><label for="username" class="top" >Nome utente:</label><br />
                    <input type="text" name="username" id="username" tabindex="1" class="field" value="" placeholder="username" /></p>
              <p><label for="password" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" placeholder="password" /></p>
              <p><input type="checkbox" name="checkbox" id="checkbox" class="checkbox" tabindex="3" size="1" value="" /><label for="checkbox" class="right">Ricordati?</label></p>
              <p><input type="submit" name="task" class="button" value="LOGIN"  /></p>
              <p><input type="submit" name="task" class="button" value="LOGOUT"  /></p>
              <p>{$messaggio}</p>
              
            </fieldset>
            </form>
          </div>
        </div>
        <div class="corner-subcontent-bottom"></div>
        -->
        <form method="post" action="index.php?controller=clogin">
        <div id="lol">
        <!--<h1>Welcome to My Portfolio</h1> -->
        <div id="logo" ><img class="small" src="images/img1.gif" /></div>
        <div id="dati">
        <table>
          <tr>
            <td id="textform"> <input id="input" type="text" name="username" id="username" placeholder="Username"/> </td>
          </tr>

          <tr>
            <td id="textform"> <input id="input" type="password" name="password" placeholder="Password"/> </td>
          </tr>

          <tr>
            <td> <input id="button" name="task" type="submit" value="LOGIN" /> </td>
          </tr>

        </table>
      </div>
    </div>
            </form>