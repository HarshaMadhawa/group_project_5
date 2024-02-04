<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
	@include("partials.html-header",["title"=>"Home"])
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add job Web Page</title>
        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    </head>
    <body class=" text-dark" style="background-color: #ead8eb;">
@include("partials.header",['isLogin' => false])
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		
	
    	<div class="container mt-5">
        	<h1 class="text-center">Post New Job</h1>
        <hr>

        
        	<div class="row">
            		<div class="col-md-6 offset-md-3">

               			<div class="card">
                    			<div class="card-body">
						<h3 class="card-title"></h3>

						<form action="jobop" method="POST" enctype=multipart/form-data>
                        @csrf
						
								
						<div class="mb-3">
							<label class="form-label">Date</label>
							<input type="date" class="form-control" name="date" required>
			    			</div>
				
                            			<div class="mb-3">
                                			<label class="form-label">Company Name</label>
                                			<input type="text" class="form-control" name="cname" required>
                            			</div>

                                        <div class="mb-3">
                                			<label class="form-label">Location</label>
                                			<input type="text" class="form-control" name="location" required>
                            			</div>

                                        <div class="mb-3">
                                			<label class="form-label">Number Of Vacancies</label>
                                			<input type="text" class="form-control" name="vacancy" required>
                            			</div>

                                        <div class="mb-3">
							                <label class="form-label">Deadline</label>
							                <input type="date" class="form-control" name="deadline" required>
			    			            </div>

                            			<div class="mb-3">
                                			<label class="form-label">Content</label>
                               				 <textarea class="form-control" name="content" rows="4" required></textarea>
                            			</div>

                                        <div class="mb-3">
                                        <label for="noticeFile">File:</label>
                                             <input type="file" class="form-control-file" name="file">
                                             </div>

                            			<button type="submit" class="btn btn-primary">Post Job</button>
										<a href="/first" class="btn btn-primary">
            
											Back
										</a>
                        			</form>



                    			</div>
                		</div>
                        
            		</div>
        	</div>
		</div>

         
    </body>
</html>

        
