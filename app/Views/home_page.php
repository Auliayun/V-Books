<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>V-Books</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet" />
    <style>
      .navbar-nav {
        margin: 0px;
        display: flex;
      }
      .navbar-nav .nav-link:hover {
        font-weight: bold;
      }
      .custom-box {
        background: linear-gradient(135deg, #487baa 0%, #a4cacd 70%);
        color: white;
        padding: 60px;
        display: flex;
        flex-direction: column;
        align-items: center;
        
      }
      .custom-box h2,
      .custom-box p {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }
      .custom-box form input[type="search"] {
        background: linear-gradient(
          135deg,
          rgba(217, 217, 217, 0.5) 10%,
          rgba(255, 255, 255, 0.5) 100%
        );
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        margin: 0;
        max-width: 100%; /* Tambahkan max-width untuk responsif */
      }
      
      .img-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            flex-direction: row-reverse;
            margin-left: 130px;
            margin-top: -10px;
            margin-bottom: 80px;
        }

        .small-box {
            background-color: #cbe7ea;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            height: 174px;
            width: 184px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 20px;
            transition: transform 0.3s;
        }

        .small-box:hover {
            transform: scale(1.1);
        }

        .small-box img {
            max-width: 100%;
            height: auto;
        }

        .small-box p {
            margin-top: 10px;
            color: #487baa;
        }

        .iconic {
            margin-top: -50px;
            margin-left: 250px;
            max-width: 100%;
            height: auto;
            transition: transform 0.3s;
        }

        .iconic:hover {
            transform: scale(1.1);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

      @media (min-width: 768px) {
        /* Perubahan untuk layar dengan lebar minimal 768px */
        .custom-box {
          padding: 80px;
          height: 300px;
        }
        .custom-box form input[type="search"] {
          width: 100%;
          max-width: 800px;
        }
        .img-container {
          flex-direction: row;
        }
        .img-container img {
          max-width: 60%; /* Ubah lebar gambar */
          height: auto;
        }
        .small-box {
          margin: 20px; /* Kembalikan margin ke nilai semula */
        }
      }

      .services .icon-box {
        box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
        padding: 40px 30px;
        transition: all ease-in-out 0.4s;
        background: #ffff;
        
        
      }

      .services .icon-box .icon {
        margin-bottom: 10px;
      }

      .services .icon-box .icon i {
        color: #47b2e4;
        font-size: 36px;
        transition: 0.3s;
      }

      .services .icon-box h5 a {
        color: #37517e;
        transition: ease-in-out 0.3s;
      }

      .services .icon-box p {
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
      }

      .services .icon-box:hover {
        transform: translateY(-10px);
      }

      .services .icon-box:hover h5 a {
        color: #47b2e4;
      }

      .box {
        background-color: #487baa;
        border-radius: 20px;
        width: 1110px;
        height: 500px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        margin-top: 100px;
      }

      .imghow {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        img {
            max-width: 100%; /* Membuat gambar responsive */
            height: auto;    /* Menjaga rasio aspek gambar */
        }

      .box h2 {
        color: #fff;
        font-weight: bold;
      }

      .box p {
        color: #fff;
      }

      .box2 {
        background-color: #487baa;
        border-radius: 20px;
        width: 700px;
        max-width: 1000px;
        height: 300px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    .box2 ol {
        color: #fff;
        text-align: justify;
        list-style-position: inside;
        margin-right: 20px;

    }

    .box2 ol li {
        margin-bottom: 10px;
    }

      footer {
              background: #487baa;
              padding: 50px 0;
              position: relative;
              margin-top: 70px;
          }

    footer h3 {
        font-size: 36px;
        margin-bottom: 30px;
        text-transform: capitalize;
        color: #ffffff;
        letter-spacing: 0.05em;
    }

    footer p {
        font-size: 14px;
        line-height: 1.6;
        color: #ffffff;
    }

    html {
    scroll-behavior: smooth;
}

    </style>
  </head>
  <body style="background-color: #eef4fa">

  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <div class="logo">
        <a href="/home_page">
          <img src="/img/logoVBooksBiru.png" width="106" height="30" alt="V-Books Logo" />
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 64px">
          <li class="nav-item" style="margin-right: 20px">
            <a class="nav-link active" aria-current="page" href="/home_page" style="color: #487baa">Home</a>
          </li>
          <li class="nav-item" style="margin-right: 30px">
            <a class="nav-link active" href="#about" style="color: #487baa">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/general_catalog" style="color: #487baa">Catalog</a>
          </li>
        </ul>
          <a href="/profile">
            <img src="/img/user.png" class="profile-img" alt="User Profile" onclick="redirectToProfilePage()" />
        </a>      
        </div>
    </div>
  </nav>

    <div class="container-fluid custom-box">
      <h2>Make Your Study Easier With Digital Library</h2>
      <p>
        Explore the treasure in books with us anytime anywhere. Carry the
        digital library with you!
      </p>
      <div class="container-fluid">
        <form class="form-check m-2" role="search">
          <input
            class="form-control"
            type="search"
            placeholder="Search Book"
            aria-label="Search"
            style="padding: 15px; height: 100%; margin: auto" />
        </form>
      </div>
    </div>
<div class="img-container">
        <a href="general_catalog">
            <div class="small-box">
                <img src="/img/books1.png" alt="small-image1" />
                <p>General</p>
            </div>
        </a>
        <a href="finalTask_catalog">
            <div class="small-box">
                <img src="/img/books2.png" alt="small-image2" />
                <p>Final Task</p>
            </div>
        </a>
            <img
                class="iconic"
                src="/img/iconic.png"
                alt="iconic"
                width="450"
                height="250"/>
       
    </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <br> 
          <br>
          <h4 style="text-align: center; color:#487baa; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">What You Can Get at V-Books?</h4>
          <br>
          
        </div>

      <div class="row" style="align-items: center; justify-content:center;">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch text-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <img src="/img/readPDF.png" alt="small-image2" />
              <h5>Read PDF Books</h5>
              <p>You can read books digitally in the form of soft files with the collection options you choose</p>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 text-center" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <img src="/img/borrowBook.png" alt="small-image2" />
            <h5>Borrow a Book</h5>
            <p>Borrow books directly and get hard books to read at your home</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 text-center" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <img src="/img/searchBook.png" alt="small-image2" />
            <h5>Search 300+ Collection</h5>
            <p>Search and find the book you choose from 300+ collections</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- End Services Section -->
  
  <div class="container py-5" id="about">
    <div class="row">
      <div class="col-md-7">
        <div class="box p-4">
          <div class="row">
            <div class="col-md-6">
              <img src="/img/laptop.png" alt="Gambar" class="img-fluid">
            </div>
            <div class="col-md-6" style="padding-right: 60px;" >
              <h2>About V-Books</h2>
              <br>
              <p style="text-align: justify;">
                V-Books is a place where you can find a wide variety of books and collections suitable for vocational education. Starting from computer engineering, business administration, hospitality, finance, to design. The Platform is designed to be easy to use, so you can quickly find what you are looking for. 
                <br>
                <br>
                V-Books is committed to providing users with an easy, fun and rewarding learning experience. With a complete and constantly updated collection of books, V-Books provides a reliable resource to deepen your knowledge. In addition, it also provides a search feature to make it easier for you to find books that match your interests and needs.  V-Books can be your faithful companion in exploring and developing yourself in the vocational field.
                <br><br>
                Join us at V-Books and start your Learning Adventure!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="howto">
    <h4 style="text-align: center; color:#487baa; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); margin-top: 100px;">How To Borrow Books?</h4>
    <div class="imghow">
      <img src="/img/howtoborrow.png" style="width: 1000px; height: 400px; "/>
    </div>
  </div>

  <div>
  <h4 style="text-align: center; color:#487baa; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); margin-top: 100px">Terms and Conditions for Borrowing Books</h4>
  </div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="box2">
                <ol>
                    <li>Please prepare an identity card in the form of KTM/KTP/SIM/other identity as collateral for borrowing books</li>
                    <li>The thesis book that can be borrowed is 2 years before the book is published</li>
                    <li>The maximum number of theses books to borrow is 3 (applies to borrowing general books)</li>
                    <li>The period for borrowing thesis and general books is 7 days</li>
                    <li>Ensure timely return to avoid fines.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<footer id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/img/logoVBooksPutih.png" width="115" height="33" alt="V-Books Logo" />
            </div>
            <div class="col-md-4 col-address" style="margin-left: -100px;">
                <p>Jl Veteran No 12 – 14, Ketawanggede, Malang, Jawa Timur, Indonesia</p>
                <p><span class="glyphicon glyphicon-envelope"></span> vokasi@ub.ac.id</p>
                <p><span class="glyphicon glyphicon-earphone"></span> 0341-553240</p>
            </div>
            <div class="col-md-4 d-flex justify-content-between align-items-start">
                <div>
                    <p style="font-weight: bold">Feature to Help You:</p>
                    <p>Read Book PDF</p>
                    <p>Borrow a book</p>
                    <p>Search for book</p>
                </div>
                <div>
                    <img src="/img/footer.png" alt="Footer Image" style="width: 134px; height: 148px;" />
                </div>
            </div>
        </div>
    </div>
</footer>

<div>
  
  <p style="text-align: center; font-size: 12px; margin-top: 5px; color: #37517e">Copyright © 2024 Aulia Ayun Mufidah</p>
</div>

    <!-- Smooth scroll script -->
    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
