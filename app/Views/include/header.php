<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= esc($title) ?></title>
    <style>
      /* GENERAL */

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Poppins", sans-serif;
}

html {
  scroll-behavior: smooth;
}

p {
  color: rgb(85, 85, 85);
}

/* TRANSITION */

a,
.btn {
  transition: all 300ms ease;
}

/* DESKTOP NAV */

nav,
.nav-links {
  display: flex;
}

nav {
  justify-content: space-around;
  align-items: center;
  height: 17vh;
}

.nav-links {
  gap: 2rem;
  list-style: none;
  font-size: 1.5rem;
}

a {
  color: black;
  text-decoration: none;
  text-decoration-color: white;
}

a:hover {
  color: grey;
  text-decoration: underline;
  text-underline-offset: 1rem;
  text-decoration-color: rgb(181, 181, 181);
}

.logo {
  font-size: 2rem;
}

.logo:hover {
  cursor: default;
}

/* SECTIONS */

section {
  padding-top: 4vh;
  height: 96vh;
  margin: 0 10rem;
  box-sizing: border-box;
  min-height: fit-content;
}

.section-container {
  display: flex;
}

/* PROFILE SECTION */

#profile {
  display: flex;
  justify-content: center;
  gap: 5rem;
  height: 80vh;
}

.section__pic-container {
  display: flex;
  height: 400px;
  width: 400px;
  margin: auto 0;
}

.section__text {
  align-self: center;
  text-align: center;
}

.section__text p {
  font-weight: 600;
}

.section__text__p1 {
  text-align: center;
}

.section__text__p2 {
  font-size: 1.75rem;
  margin-bottom: 1rem;
}

.title {
  font-size: 3rem;
  text-align: center;
}

/* BUTTONS */

.btn-container {
  display: flex;
  justify-content: center;
  gap: 1rem;
}

.btn {
  font-weight: 600;
  transition: all 300ms ease;
  padding: 1rem;
  width: 8rem;
  border-radius: 2rem;
}

.btn-color-1,
.btn-color-2 {
  border: rgb(53, 53, 53) 0.1rem solid;
}

.btn-color-1:hover,
.btn-color-2:hover {
  cursor: pointer;
}

.btn-color-1,
.btn-color-2:hover {
  background: rgb(53, 53, 53);
  color: white;
}

.btn-color-1:hover {
  background: rgb(0, 0, 0);
}

.btn-color-2 {
  background: none;
}

.btn-color-2:hover {
  border: rgb(255, 255, 255) 0.1rem solid;
}

.btn-container {
  gap: 1rem;
}

#about {
  position: relative;
}

.about-containers {
  gap: 2rem;
  margin-bottom: 2rem;
  margin-top: 2rem;
}

.about-details-container {
  justify-content: center;
  flex-direction: column;
}

.about-containers,
.about-details-container {
  display: flex;
}

.about-pic {
  border-radius: 2rem;
}

.arrow {
  position: absolute;
  right: -5rem;
  bottom: 2.5rem;
}

.details-container {
  padding: 1.5rem;
  flex: 1;
  background: white;
  border-radius: 2rem;
  border: rgb(53, 53, 53) 0.1rem solid;
  border-color: rgb(163, 163, 163);
  text-align: center;
}

.section-container {
  gap: 4rem;
  height: 80%;
}

.section__pic-container {
  height: 400px;
  width: 400px;
  margin: auto 0;
}

@media screen and (max-width: 1400px) {
  #profile {
    height: 83vh;
    margin-bottom: 6rem;
  }
  .about-containers {
    flex-wrap: wrap;
  }
}

@media screen and (max-width: 1200px) {
  #desktop-nav {
    display: none;
  }
  #profile,
  .section-container {
    display: block;
  }
  .arrow {
    display: none;
  }
  section,
  .section-container {
    height: fit-content;
  }
  section {
    margin: 0 5%;
  }
  .section__pic-container {
    width: 275px;
    height: 275px;
    margin: 0 auto 2rem;
  }
  .about-containers {
    margin-top: 0;
  }
}

@media screen and (max-width: 600px) {
 
  #profile {
    height: 83vh;
    margin-bottom: 0;
  }
  .about-containers,
  .btn-container {
    flex-wrap: wrap;
  }

  .nav-links li a {
    font-size: 1rem;
  }
 
  .logo {
    font-size: 1.5rem;
  }
  .nav-links {
    flex-direction: column;
    gap: 0.5rem;
    text-align: center;
  }
  .section__pic-container {
    width: auto;
    height: 46vw;
    justify-content: center;
  }
  .section__text__p2 {
    font-size: 1.25rem;
  }
  .title {
    font-size: 2rem;
  }
  .text-container {
    text-align: justify;
  }
}
    </style>
  </head>
  <body>
<nav id="desktop-nav">
      <div class="logo">F2-Technical</div>
      <div>
        <ul class="nav-links">
          <li><a href="<?= base_url('/') ?>">Home</a></li>
          <li><a href="<?= base_url('/Sukuna') ?>">Sukuna</a></li>
          <li><a href="<?= base_url('/Gojo') ?>">Gojo</a></li>
          <li><a href="<?= base_url('/Yuji') ?>">Yuji</a></li>
        </ul>
      </div>
    </nav>