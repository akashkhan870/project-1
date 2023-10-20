<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="main-deshbord">
    <div class="row">
        <div class="deshbord col-md-2">
            <h1>deshbord</h1>
            <a href="home.php" class="btn btn-primary d-block m-2 w-100">Home</a>
            <a href="add-student.php" class="btn btn-primary d-block m-2 w-100">Add-New Student</a>
            <a href="index.php" class="btn btn-primary d-block m-2 w-100">View All Student</a>
            <a href="view.php" class="btn btn-primary d-block m-2 w-100">View</a>
        </div>
        <div class="text-area col-md-10">
            

            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

                          <form action="add_student_query.php" method="POST">
              
                            <div class="row">
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="firstname" class="form-control form-control-lg" name="first_name"/>
                                  <label class="form-label" for="firstname">First Name</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="lastname" class="form-control form-control-lg" name="last_name"/>
                                  <label class="form-label" for="lastname">Last Name</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="firstname" class="form-control form-control-lg" name="father_name"/>
                                  <label class="form-label" for="firstname">Fathers Name</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="firstname" class="form-control form-control-lg" name="mother_name"/>
                                  <label class="form-label" for="firstname">Mothers Name</label>
                                </div>
              
                              </div>
                            </div>
                            
                            <div class="row">
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="firstname" class="form-control form-control-lg" name="polytechnic_name"/>
                                  <label class="form-label" for="firstname">polytechnic_name</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="lastname" class="form-control form-control-lg" name="address"/>
                                  <label class="form-label" for="lastname">address</label>
                                </div>
              
                              </div>
                            <div class="row">
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" class="form-control form-control-lg" id="birthdayDate" name="brithday"/>
                                  <label for="birthdayDate" class="form_label">Birthday</label>
                                </div>
              
                              </div>   
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="lastname" class="form-control form-control-lg" name="phone"/>
                                  <label class="form-label" for="lastname">phone</label>
                                </div>
              
                              </div>                           
                           
                            <div class="row">
                              <div class="col-12">
              
                                <select class="select form-control-lg" name="choose_option">
                                  <option value="1">Choose subject</option>
                                  <option value="2">Web Design</option>
                                  <option value="3">Web Devlopment</option>
                                  <option value="4">Networking</option>
                                  <option value="4">Graphic Design</option>
                                </select>
                                <label class="form-label select-label">Choose option</label>
              
                              </div>
                            </div>
              
                            <div class="mt-4 pt-2">
                              <input class="btn btn-primary btn-lg" type="submit" value="Submit" name="submit"/>
                            </div>
              
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>