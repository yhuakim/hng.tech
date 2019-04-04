[![Build Status](https://travis-ci.org/timolinn/hng.tech.svg?branch=master)](https://travis-ci.org/timolinn/hng.tech)

<div align="center">

![hng](https://res.cloudinary.com/iambeejayayo/image/upload/v1554240066/brand-logo.png)

<br>

</div>

# Installation Guide

- You need a server, download [Wamp](http://www.wampserver.com/en/) or [Xampp](https://www.apachefriends.org/index.html)
- Clone this repository into `htdocs` of `www` folder in your respective servers. <br>
- **If you have not been added to the organization, kindly work in your forked repository and open a pull request here** <br>
- Fork the repository and push to your `staging branch`
- Merge to your `master` and compare forks with the original repository
- Open a Pull Request.
- **Read [this](https://help.github.com/en/articles/creating-a-pull-request-from-a-fork) or watch [this](https://www.youtube.com/watch?v=G1I3HF4YWEw) for more help**

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
- Now your page should be assesible via `localhost:8000/interns/mark`
![hng profile](https://res.cloudinary.com/iambeejayayo/image/upload/v1554302765/download.png)
- Edit the contents of the file to your profile details
- Push to `staging` branch and open a pull request
- Wait for review

**Ensure you read this doc [here](https://docs.google.com/document/d/1TxZqGLsut4ZVJEP6xF-DZGq3goaHfQ2phF-1I3YbrNc/edit?usp=sharing) for complete instructions** <br>
Failure to do this will warant closing your pull request
