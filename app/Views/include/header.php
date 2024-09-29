<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  padding: 2rem;
}

h1, h2, p {
  color: rgb(85, 85, 85);
}

/* NAVIGATION LINKS */
ul {
  list-style: none;
  padding: 1rem;
  text-align: center;
}

ul li {
  margin: 1rem 0;
}

a {
  color: black;
  text-decoration: none;
  font-size: 1.25rem;
}

a:hover {
  color: grey;
  text-decoration: underline;
}

/* PROFILE SECTION */
.section__pic-container {
  display: flex;
  justify-content: center;
  margin-bottom: 2rem;
}

img {
  border-radius: 50%;
  width: 150px;
  height: 150px;
}

.profile-details {
  text-align: center;
}

.profile-details h2 {
  font-size: 2rem;
}

.profile-details p {
  font-size: 1.2rem;
  margin: 0.5rem 0;
}

/* BUTTONS */
.btn-container {
  display: flex;
  justify-content: center;
  gap: 1rem;
}

button {
  font-weight: 600;
  padding: 1rem;
  border-radius: 2rem;
  border: 1px solid rgb(53, 53, 53);
  background-color: rgb(250, 250, 250);
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: rgb(53, 53, 53);
  color: white;
}
    </style>
</head>
<body>
    <h1>Sample Routing and View</h1>
</body>
</html>