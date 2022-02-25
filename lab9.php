<?PHP
define('LABTITLE', 'Laboratory Activity No. 9');
define('DESCRIPTION', 'Handling User Input - User Registration');

function generate_textbox($name, $value)
{
    return '<input type="text" name="' . $name . '" value="' . $value . '">';
}
function generate_password($name, $value)
{
    return '<input type="password" name="' . $name . '" value="' . $value .
        '">';
}
function generate_textarea($name, $value)
{
    return '<textarea name="' . $name . '">' . $value . '</textarea>';
}
function generate_checkbox($name)
{
    return '<input type="checkbox" name="' . $name . '">';
}

// *********************************************************
// Items 1 to 9, get form data and assign to local variable
// Item 1 is already given
// *********************************************************
// Item 1: Get lastname form data
$lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
$firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
$middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : '';
$emailaddress = isset($_POST['txtEmailAddress']) ? $_POST['txtEmailAddress'] : '';
$username = isset($_POST['txtUsername']) ? $_POST['txtUsername'] : '';
$password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
$confirmpassword = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : '';
$comments = isset($_POST['txtComments']) ? $_POST['txtComments'] : '';
$agree = isset($_POST['txtAgree']) ? $_POST['txtAgree'] : '';
if (count($_POST) == 0) {
    echo '<form method="post" action="lab9.php">';
    echo '<table>';
    echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User 
Registration)</td></tr>';
    // **************************************************************
    // Item 10 to 18, generate html form elements using the functions
    // declared in No. 4. Item 10 is already given
    // **************************************************************
    // Item 10: Generate lastname textbox
    echo '<tr><td>Lastname</td><td>',
    generate_textbox('txtLastname', $lastname),
    '</td></tr>';
    echo '<tr><td>Firstname</td><td>',
    generate_textbox('txtFirstname', $firstname),
    '</td></tr>';
    echo '<tr><td>Middlename</td><td>',
    generate_textbox('txtMiddlename', $middlename),
    '</td></tr>';
    echo '<tr><td>Email Address</td><td>',
    generate_textbox('txtEmailAddress', $emailaddress),
    '</td></tr>';
    echo '<tr><td>Username</td><td>',
    generate_textbox('txtUsername', $username),
    '</td></tr>';
    echo '<tr><td>Password</td><td>',
    generate_password('txtPassword', $password),
    '</td></tr>';
    echo '<tr><td>Confirm Password</td><td>',
    generate_password('txtConfirmPassword', $confirmpassword),
    '</td></tr>';
    echo '<tr><td>Comment</td><td>',
    generate_textarea('txtComments', $comments),
    '</td></tr>';
    echo '<tr><td>Agree</td><td>',
    generate_checkbox('txtAgree', $agree),
    '</td></tr>';
    echo '<tr><td colspan=2>';
    echo '<input type="submit" name="btnRegister" value="Register">&nbsp;';
    echo '<input type="reset" name="btnReset" value="Reset">&nbsp;';
    echo '</td></tr>';
    echo '</table>';
    echo '</form>';
} else {
    echo '<table>';
    echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User 
Registration)</td></tr>';
    echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
    // ****************************************************************
    // For items 20 to 28, display submitted form data inside <td></td>
    // Item 20 already given
    // ****************************************************************
    // Item 20: display lastname data
    echo '<tr><td>Lastname</td><td>', $lastname, '</td></tr>';
    echo '<tr><td>Firstname</td><td>', $firstname, '</td></tr>';
    echo '<tr><td>Middle Name</td><td>', $middlename, '</td></tr>';
    echo '<tr><td>Email Address</td><td>', $emailaddress, '</td></tr>';
    echo '<tr><td>Username</td><td>', $username, '</td></tr>';
    echo '<tr><td>Password</td><td>', $password, '</td></tr>';
    echo '<tr><td>Confirm Password</td><td>', $confirmpassword, '</td></tr>';
    echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
    echo '<tr><td>Agree</td><td>', $agree, '</td></tr>';
    echo '</table>';
}
