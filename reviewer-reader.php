<?php $ManuscriptID = $_GET['manuid'] ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<html>
	<head>
		<script src="js/reviewer-reader.js"></script>
		<style>
			body {
			  padding-top: 6rem;
			  padding-bottom: 2rem;
			  padding-left: 2rem;
			  padding-right: 2rem;
			}


			.form-row {
				margin-bottom: .5rem;
			}
		</style>
	</head>

	<body class='bg-dark'>
		<div class="container-fluid">
			<div class="d-flex justify-content-center">
				<!-- PDF Viewer (pdf.js) 
				<div class="embed-responsive embed-responsive-4by3 mr-2" style="height: 50rem">
					<iframe class="embed-responsive-item" src="/pdfreader/viewer.html" frameBorder="0"></iframe>
				</div>
				 -->
				
				<!-- PDF Viewer (PDFObject) -->
				<div id="PdfViewer" class="embed-responsive embed-responsive-4by3 mr-2" style="height: 50rem">
				</div>

				<div class="card mr-2" style="width: 60rem; height: 50rem">
					<div class="card-body">
						<h5 class="card-title">
							<?php 
								$sql = "SELECT manuscriptTitle FROM manuscripts WHERE idManuscript = ".$ManuscriptID;
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo "[".$ManuscriptID."] ";
										echo $row['manuscriptTitle'];
									}
								}
							?>
						</h5>
						<?php 
							$kwsql = "SELECT keywords FROM manuscripts WHERE idManuscript = ".$ManuscriptID;
							$kwresult = mysqli_query($conn, $kwsql);

							if (mysqli_num_rows($kwresult) > 0) {
								while ($row = mysqli_fetch_assoc($kwresult)) {
									echo '<span class="badge badge-primary mr-1 mb-1">';
									echo $row['keywords'];
									echo '</span>';
								}
							}
						?>
						<hr>

						
						<form>
							<div class="accordion" id="accordionExample">
							  <div class="card">
							    <div class="card-header" id="headingOne">
							      <h2 class="mb-0">
							        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          Technical Aspects
							        </button>
							      </h2>
							    </div>

							    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							      	<div class="card-body">
										<div class="form-group">
											<div class="form-row">
												<div class="col-10">
												</div>
												<div class="col-2 ml-auto">
													<small>Score (%)</small>
												</div>
											</div>
										  	<div class="form-row">
										  		<div class="col-10">
										  			<label class="form-label" for="inputOriginal"><span class="badge badge-primary">1</span> The paper is within the scope of the Journal.</label>
										  		</div>
										  		<div id="scoreOriginal" class="col-2 ml-auto" role="group" aria-label="inputOriginal">
												  	<select class="form-control" id="exampleFormControlSelect1">
												      <option>0</option>
												      <option>20</option>
												      <option>40</option>
												      <option>60</option>
												      <option>80</option>
												      <option>100</option>
												    </select>
												</div>
										  	</div>
										  	<div class="form-row">
										  		<div class="col-10">
										  			<label class="form-label" for="inputOriginal"><span class="badge badge-primary">2</span> The paper is original.</label>
										  		</div>
										  		<div id="scoreFigures" class="col-2 ml-auto" role="group" aria-label="inputOriginal">
												  	<select class="form-control" id="exampleFormControlSelect1">
												      <option>0</option>
												      <option>20</option>
												      <option>40</option>
												      <option>60</option>
												      <option>80</option>
												      <option>100</option>
												    </select>
												</div>
										  	</div>
										  	<div class="form-row">
										  		<div class="col-10">
										  			<label class="form-label" for="inputScope"><span class="badge badge-primary">3</span> The paper is free of technical errors.</label>
										  		</div>
										  		<div id="scoreLength" class="col-2 ml-auto" role="group" aria-label="inputOriginal">
												  	<select class="form-control" id="exampleFormControlSelect1">
												      <option>0</option>
												      <option>20</option>
												      <option>40</option>
												      <option>60</option>
												      <option>80</option>
												      <option>100</option>
												    </select>
												</div>
										  	</div>
										</div>      
									</div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="headingTwo">
							      <h2 class="mb-0">
							        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          Communication Aspects
							        </button>
							      </h2>
							    </div>
							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							      	<div class="card-body">
							      		<div class="form-group">
											<div class="form-row">
												<div class="col-10">
												</div>
												<div class="col-2 ml-auto">
													<small>Score (%)</small>
												</div>
											</div>
										  	<div class="form-row">
										  		<div class="col-10">
										  			<label class="form-label" for="inputOriginal"><span class="badge badge-primary">1</span> The paper is clearly readable.</label>
										  		</div>
										  		<div id="scoreOriginal" class="col-2 ml-auto" role="group" aria-label="inputOriginal">
												  	<select class="form-control" id="exampleFormControlSelect1">
												      <option>0</option>
												      <option>20</option>
												      <option>40</option>
												      <option>60</option>
												      <option>80</option>
												      <option>100</option>
												    </select>
												</div>
										  	</div>
										  	<div class="form-row">
										  		<div class="col-10">
										  			<label class="form-label" for="inputOriginal"><span class="badge badge-primary">2</span> The figures are clear & do clearly convey the intended message.</label>
										  		</div>
										  		<div id="scoreFigures" class="col-2 ml-auto" role="group" aria-label="inputOriginal">
												  	<select class="form-control" id="exampleFormControlSelect1">
												      <option>0</option>
												      <option>20</option>
												      <option>40</option>
												      <option>60</option>
												      <option>80</option>
												      <option>100</option>
												    </select>
												</div>
										  	</div>
										  	<div class="form-row">
										  		<div class="col-10">
										  			<label class="form-label" for="inputScope"><span class="badge badge-primary">3</span> The length of the paper is appropriate.</label>
										  		</div>
										  		<div id="scoreLength" class="col-2 ml-auto" role="group" aria-label="inputOriginal">
												  	<select class="form-control" id="exampleFormControlSelect1">
												      <option>0</option>
												      <option>20</option>
												      <option>40</option>
												      <option>60</option>
												      <option>80</option>
												      <option>100</option>
												    </select>
												</div>
										  	</div>
										</div>
							      	</div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="headingThree">
							      <h2 class="mb-0">
							        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          Comments to the authors
							        </button>
							      </h2>
							    </div>
							    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							      	<div class="card-body">
										<textarea class="form-control" id="commentsToAuthor" rows="5"></textarea>
										<small class="text-muted">(You may attach another document in <span class="badge badge-primary" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="cursor: pointer;">Additional Documents</span>)</small>
									</div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="headingFour">
							      <h2 class="mb-0">
							        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							          Recommendation
							        </button>
							      </h2>
							    </div>
							    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
							      	<div class="card-body">
										<select id="recommendation" class="form-control">
											<option value="Accepted without modifications">Accepted without modifications</option>
											<option value="Accepted with minor corrections">Accepted with minor corrections</option>
											<option value="Accepted with major modification">Accepted with major modification</option>
											<option value="Rejected">Rejected</option>
										</select>    
									</div>
							    </div>
						      </div>

						      <div class="card">
							    <div class="card-header" id="headingFive">
							      <h2 class="mb-0">
							        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							          Comments to editor
							        </button>
							      </h2>
							    </div>
							    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
							      	<div class="card-body">
										<textarea class="form-control" id="commentsToAuthor" rows="5"></textarea>
										<small class="text-muted">(These comments will not be sent to the authors)</small>      
									</div>
							    </div>
						      </div>

						      <div class="card">
							    <div class="card-header" id="headingSix">
							      <h2 class="mb-0">
							        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							          Additional Documents
							        </button>
							      </h2>
							    </div>
							    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
							      	<div class="card-body">
										<div class="form-group custom-file">
										  <input type="file" class="custom-file-input" id="fileInput">
										  <label class="custom-file-label" for="customFile">Choose file</label>
										</div>     
									</div>
							    </div>
						      </div>
						</div>	
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary float-right ml-1">Submit Review</button>
						<button type="button" class="btn btn-danger">Reset Form</button>
						<button type="button" class="btn btn-secondary float-right">Cancel</button>
					</div>
				</div>
				</form>
			</div>
		</div>


		<script>
		document.querySelector('.custom-file-input').addEventListener('change',function(e){
		  var fileName = document.getElementById("fileInput").files[0].name;
		  var nextSibling = e.target.nextElementSibling
		  nextSibling.innerText = fileName
		})

		var file = "pdf/7826-FYP%20Report%20-%20Fauzi%20(0331866).pdf"
		PDFObject.embed(file, "#PdfViewer");
		</script>
	</body>
</html>