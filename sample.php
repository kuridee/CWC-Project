

<style>

*{
	margin: 0px;
	padding: 0px;
}	

.container{
	height: 100vh;
	background-color: maroon;
}

.content{
 	position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);

}
.student{
	height: 80px;
	width: 80px;
	background-color: green;
	border: 1px solid white;
	border-radius: 4px;
	
}

.admin{
	height: 80px;
	width: 80px;
	background-color: green;
	border: 1px solid white;
	border-radius: 4px;
}
a{

	color: white;
	text-decoration: none;
}

</style>

<div class="container">
	<div class="content">
		<button class="student">
	<a href="Login.php">Student</a>
</button>
      

<button class="admin">
	<a href="Admin_Login.php">Admin</a>
    </button>
</div>



</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ADD SUBJECTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

























