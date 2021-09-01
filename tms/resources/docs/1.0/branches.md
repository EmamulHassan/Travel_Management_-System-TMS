# Branches

---

## Model.

Created Model with Migration named Branch
inside migration<br>

Function <h3> up() </h3> was updated for database design

## Controller.

Created Controller with resourse named BranchController<br>

<h3>index()</h3>
This Function is returning the manage branch page and reading data from database
<h3>create()</h3>
This Function is redirecting the user into the create branch page
<h3>store(Request $request)</h3>
This Function is taking data from form and storing it into the database fields
<h3>edit($id)</h3>
This function checks wheather the selected id is available in the database or not<br>
and if available then redirects the user to the edit page
<h3>update(Request $request, $id)</h3>
This function find the requested id and updates the edited fields<br>
after that redirects the user to the manage branch page
<h3>destroy($id)</h3>
This function checks wheather the selected id is available in the database or not<br>
and if available then deletes that branch<br>
after that redirects the user to the manage branch page
