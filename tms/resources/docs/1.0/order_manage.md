# Manage Order

---

## Model.

No Model was created for this feature

## Controller.

Created Controller with resourse named BranchController<br>

<h3>index()</h3>
This Function is returning the manage order page and reading data from database

<h3>edit($id)</h3>
This function checks wheather the selected id is available in the database or not<br>
and if available then redirects the user to the update order page
<h3>update(Request $request, $id)</h3>
This function find the requested id and updates the edited fields<br>
after that redirects the user to the manage order page
<h3>destroy($id)</h3>
This function checks wheather the selected id is available in the database or not<br>
and if available then deletes that order<br>
after that redirects the user to the manage order page
