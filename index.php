  <!--Łaczenie z baza-->
	<?php include('mysql/db_connect.php'); ?>
      <!-- header-->
    <?php require 'includes/header.php' ?>
	<!-- /header -->
	
	<!-- body content-->
		<div class="content-wrapper">
			 <div class="content">
				<h3>Latest News</h3>
  				<div class="post-list">
		    		<?php

						$stmt=DB::Query("Select * from content");
						
						while( $dane=$stmt->fetch_assoc() ){
							echo '<article class="post-content">';
							echo "<h3>".$dane["Tytul"]."</h3>";
							echo "<p>".$dane["Zawartosc"]."</p>";
							echo '</article>';
						}

						if(isset($_POST['send'])){
							$title=strip_tags($_POST['title']);
							$content=strip_tags($_POST['content']);
							$image=strip_tags($_POST['image']);
							$video=strip_tags($_POST['video']);
							DB::Query("INSERT INTO content values (Null,'$title','$content','$video','$image')");
							header("Location: /php");
						}

		    		?>
				</div>
				<div class="new-post">
					<form action="" method="POST" class="form-ui" >
					<h3>Add New Article</h3>
					<div class="field">
						<label>Tytuł</label>
						<input type="text" name="title" id="title">
					</div>
					<div class="field">
						<label>Treść</label>
						<input type="text" name="content" id="content">
					</div>
					<div class="field">
						<label>Obraz</label>
						<input type="text" name="image" id="image">
					</div>
					<div class="field">
						<label>Video</label>
						<input type="text" name="video" id="video">
					</div>
						<input type="submit" name="send" id="send" value="Wstaw">
					</form>
				</div>
			</div>
	</div>
		
		<div class="aside">
			Partner references
			</div>
	 <div  class="loginPanelRight">
			<form class="form" id="loginfrom">
					<div class="field">
						<label style="cursor: default;">Nickname</label>
						<input type="text" name="nickname" id="username">
					</div>
					<div class="field">
						<label>Password</label>
						<input type="password" name="pass">
						
					</div>
				<button class="signInButton"><i class="fas fa-sign-in-alt"></i>Sign In</button>
				<button class="recoveryButton"><i class="fas fa-redo-alt"></i>Forgot Account</button>
			</form>
		</div> 
	<!--footer-->
	<?php require 'includes/footer.php' ?>
	<!--/footer-->
