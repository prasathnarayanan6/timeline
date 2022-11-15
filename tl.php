<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>timeline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* The actual timeline (the vertical ruler) */
.main-timeline-4 {
  position: relative;
}
.shaww{
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}
/* The actual timeline (the vertical ruler) */
.main-timeline-4::after {
  content: "";
  position: absolute;
  width: 3px;
  background-color: #bbb;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.timeline-4 {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline-4::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -11px;
  background-color: #bbb;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left-4 {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right-4 {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left-4::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium solid rgba(37, 117, 252, 1);
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent rgba(37, 117, 252, 1);
}

/* Add arrows to the right container (pointing left) */
.right-4::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium solid rgba(245, 87, 108, 1);
  border-width: 10px 10px 10px 0;
  border-color: transparent rgba(245, 87, 108, 1) transparent transparent;
}

/* Fix the circle for containers on the right side */
.right-4::after {
  left: -14px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline-4::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline-4 {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline-4::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left-4::after,
  .right-4::after {
    left: 18px;
  }

  .left-4::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right-4 {
    left: 0%;
  }
}

.gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to right,
    rgba(106, 17, 203, 1),
    rgba(37, 117, 252, 1)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to right,
    rgba(106, 17, 203, 33),
    rgba(37, 117, 252, 33)
  );
}

.gradient-custom-4 {
  /* fallback for old browsers */
  background: #f093fb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to left,
    rgba(240, 147, 251, 1),
    rgba(245, 87, 108, 1)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to left,
    rgba(240, 147, 251, 1),
    rgba(245, 87, 108, 1)
  );
}

    </style>
</head>
<body class="">
<div class="container py-5">
  <div class="main-timeline-4 text-white">
    <div class="timeline-4 left-4 ">
      <div class="card gradient-custom shaww">
        <div class="card-body p-4">
          <i class="fas fa-brain fa-2x mb-3"></i>
          <h4>2019</h4>
          <!-- <p class="small text-white-50 mb-4">May 21</p> -->
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
            mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
            dignissim
            per, habeo iusto primis ea eam.
          </p>
          <h6 class="badge bg-light text-dark mb-0">New</h6>
          <h6 class="badge bg-light text-dark mb-0">Admin</h6>
        </div>
      </div>
    </div>
    <div class="timeline-4 right-4">
      <div class="card gradient-custom-4 shaww">
        <div class="card-body p-4">
          <i class="fas fa-camera fa-2x mb-3"></i>
          <h4>2020</h4>
          <!-- <p class="small text-white-50 mb-4">May 18</p> -->
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
            mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
            dignissim
            per, habeo iusto primis ea eam.
          </p>
          <h6 class="badge bg-light text-dark mb-0">New</h6>
          <h6 class="badge bg-light text-dark mb-0">Admin</h6>
        </div>
      </div>
    </div>
    <div class="timeline-4 left-4">
      <div class="card gradient-custom shaww">
        <div class="card-body p-4">
          <i class="fas fa-campground fa-2x mb-3"></i>
          <h4>2021</h4>
          <!-- <p class="small text-white-50 mb-4">May 6</p> -->
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
            mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
            dignissim
            per, habeo iusto primis ea eam.
          </p>
          <h6 class="badge bg-light text-dark mb-0">New</h6>
          <h6 class="badge bg-light text-dark mb-0">Admin</h6>
        </div>
      </div>
    </div>
    <div class="timeline-4 right-4">
      <div class="card gradient-custom-4 shaww+">
        <div class="card-body p-4">
          <i class="fas fa-sun fa-2x mb-3"></i>
          <h4>2022</h4>
          <!-- <p class="small text-white-50 mb-4">Apr 26</p> -->
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
            mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
            dignissim
            per, habeo iusto primis ea eam.
          </p>
          <h6 class="badge bg-light text-dark mb-0">New</h6>
          <h6 class="badge bg-light text-dark mb-0">Admin</h6>
        </div>
      </div>
    </div>
    <div class="timeline-4 left-4">
      <div class="card gradient-custom shadow-lg bg-body rounded">
        <div class="card-body p-4">
          <i class="fas fa-palette fa-2x mb-3"></i>
          <h4>2023</h4>
          <!-- <p class="small text-white-50 mb-4">Apr 12</p> -->
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
            mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
            dignissim
            per, habeo iusto primis ea eam.
          </p>
          <h6 class="badge bg-light text-dark mb-0">New</h6>
          <h6 class="badge bg-light text-dark mb-0">Admin</h6>
        </div>
      </div>
    </div>
    <div class="timeline-4 right-4">
      <div class="card gradient-custom-4">
        <div class="card-body p-4">
          <i class="fas fa-laugh-beam fa-2x mb-3"></i>
          <h4>11:25 AM</h4>
          <!-- <p class="small text-white-50 mb-4">Apr 11</p> -->
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
            mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
            dignissim
            per, habeo iusto primis ea eam.
          </p>
          <h6 class="badge bg-light text-dark mb-0">New</h6>
          <h6 class="badge bg-light text-dark mb-0">Admin</h6>
        </div>
      </div>
    </div>
    <div class="timeline-4 left-4">
      <div class="card gradient-custom">
        <div class="card-body p-4">
          <i class="fas fa-pizza-slice fa-2x mb-3"></i>
          <h4>2022</h4>
          <!-- <p class="small text-white-50 mb-4">Apr 5</p> -->
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
            mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
            dignissim
            per, habeo iusto primis ea eam.
          </p>
          <h6 class="badge bg-light text-dark mb-0">New</h6>
          <h6 class="badge bg-light text-dark mb-0">Admin</h6>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
