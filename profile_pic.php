<table class='bordertable' cellspacing=0 cellpadding=0 width=100% valign=top>
  <tr>
    <td>
      <table cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td class='white' bgcolor=#3B5998 colspan=2>
            Picture
          </td>
          <td align=right class='white' bgcolor=#3B5998>
            [ <a href="editpicture.php" class=menu>edit</a> ]
          </td>
        </tr>
      </table>
      <br>
      <center>
        <table cellspacing=0 cellpadding=2 border=0 width=95%>
          <tr>
            <td align=center>
              <?PHP
              $pic=$profile->defaultpic;
              echo "<img src=images/default.jpg>";
              ?>
            </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
<br>
<table class='bordertable' cellspacing=0 cellpadding=0 width=100% valign=top>
  <tr>
    <td>
      <table class='bottomborder' cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td>
            <a href="friends.php">View My Friends</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table class='bottomborder' cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td>
            <a href="editprofile.php">Edit your profile</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table class='bottomborder' cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td>
            <a href="account.php">My account preferences</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td>
            <a href="privacy.php">My privacy preferences</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<br>
<table class='bordertable' cellspacing=0 cellpadding=0 width=100% valign=top>
  <tr>
    <td>
      <table cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td class='white' bgcolor=#3B5998>
            Connection
          </td>
        </tr>
      </table>
      <table cellspacing=0 cellpadding=2 border=0 width=95% align=center>
        <tr>
          <td align=center>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<br>
<table class='bordertable' cellspacing=0 cellpadding=0 width=100% valign=top>
  <tr>
    <td>
      <table cellspacing=0 cellpadding=2 border=0 width=100%>
        <tr>
          <td class='white' bgcolor=#3B5998 colspan=2>
            Friends at
            <?php echo $profile->school; ?>
          </td>
        </tr>
      </table>
      &nbsp;<br>
      <center>
    </td>
  </tr>
</table>
