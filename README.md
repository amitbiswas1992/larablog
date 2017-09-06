> ## Blogist
=========================================================

> This is a Blog app which is only for practice purpose. 

> ## Topic Covered With This Blog 
=========================================================

* Data Rendering in Views 
* By using PHP Artisan Generator create  Cotroller , Model , Migration ... 
* Setup Migration , Model 
* Cotroller Validation from server side 

```php 
$this->validate(request(), [
'title'=>'required| min:8 ',
'body'=>'required | min:10'
]);
``` 
* Route Model Binding and Views
* Creating data and redirect to the home view

```php
Post::create(request(['title','body']));

return redirect('/');
```

