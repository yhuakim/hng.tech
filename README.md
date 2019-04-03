<div align="center">
  
![hng](https://res.cloudinary.com/iambeejayayo/image/upload/v1554240066/brand-logo.png)

<br>

</div>

# Installation Guide

- You need a server, download [Wamp](http://www.wampserver.com/en/) or [Xampp](https://www.apachefriends.org/index.html)
- Clone this repository into `htdocs` of `www` folder in your respective servers.

```bash
git clone https://github.com/hnginternship5/hng.tech.git
```
```bash
cd hng.tech
```
```bash
php -S localhost:8000
```
```bash
Visit localhost:8000 in your browser
```

# Contribution Guide

```bash
git checkout staging
```
The template for your profile page can be found here
`views/interns/template.php`
- Copy the contents of that file
- Create a new file with your slack username, e.g `mark.php`
- Paste the contents there
- Navigate to `index.php` in root and add your URL path before `404.php`
```php
case '/interns/mark' :
          require __DIR__ . '/views/interns/mark.php';
          break;
```
- Now your page should be assesible via `localhost:8000/interns/mark`
![hng profile](https://res.cloudinary.com/iambeejayayo/image/upload/v1554302765/download.png)
- Edit the contents of the file to your profile details
- Push to `staging` branch and open a pull request
- Wait for review

*Ensure you read this doc [here](https://docs.google.com/document/d/1TxZqGLsut4ZVJEP6xF-DZGq3goaHfQ2phF-1I3YbrNc/edit?usp=sharing) for complete instructions*
Failure to do this will warant closing your pull request
