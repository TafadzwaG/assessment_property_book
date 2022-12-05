### Screenshot of images of Dashboard
<img src="https://user-images.githubusercontent.com/60160165/205647801-720b8fc4-81a4-468b-8b5c-f9c1d694949f.png">
<img src="https://user-images.githubusercontent.com/60160165/205653190-05c6ea8d-0f52-45aa-9606-5dc2eb655c3f.png">

### Screenshot of images of UI
<img src="https://user-images.githubusercontent.com/60160165/205641881-9e2da294-29c3-4d96-a605-cbfa02eab8fa.png">
<img src="https://user-images.githubusercontent.com/60160165/205653848-ef96cb8d-f8d4-4655-b69f-2ff2f9d1d227.png">



### Admin Commands
composer require encore/laravel-admin
Then run these commands to publish assets and config：

php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"

php artisan admin:install



#### Admin URL
http://localhost/admin/

Admin Username: admin
Admin Password: admin

## NB: Make Sure there a successful admin migration

### Details 
All the data is from the database so run the above commands


## Admin Routes 

- http://127.0.0.1:8000/admin/services
- http://127.0.0.1:8000/admin/footers
- http://127.0.0.1:8000/admin/prices
- http://127.0.0.1:8000/admin/tags
- http://127.0.0.1:8000/admin/banner-vedios
- http://127.0.0.1:8000/admin/our-stories
- http://127.0.0.1:8000/admin/story-photos
- http://127.0.0.1:8000/admin/home-banners


### Relationships

- Price hasMany Tags
- HomeBanner hasOne Bannervedio
- OurStory hasMany StoryPhotos


### Details
- This project depends on the database so the first step is to make sure the admin is working
by running the above commands
- The icons are images which can be found in the (public/icons) folder
- The footer is also dynamic with a owl carousel
- And the story images are also on the carousel
- The pricing cards have tags those with ticks so first you have to create 
a price the create a tag of the price and you can have as many tags
- Images used can be found in the public folder
- The BannerVedio model was supposed to be for video upload but i have changed it to image upload in the admin without changing the name of the model (there is a spelling error)



## One UI Dashboard 
There is also another dashboard of one ui 
- it provide thes listing if everything in the databse without the ability to add edit or delete 
- There is no need for auth to this dashboard 
- This dashboard was created using the One UI template

### Navigation to one Ui dashboard 

http://127.0.0.1:8000/dashboard

- Only the Add footer is working on this dashboard 

- 

