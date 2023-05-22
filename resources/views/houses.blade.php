<h1>{{$heading}}</h1>
@unless (count($houses)==0)
@foreach ($houses as $house)
    <a href="/houses/{{$house['id']}}">{{$house['title']}}</a>
    <p>Price = {{$house['price']}}</p>
    <p>Square feet = {{$house['squer_feet']}} meter square</p>
    <p>No of bedrooms = {{$house['no_of_bedrooms']}}</p>
    <p>No of bathrooms = {{$house['no_of_bathrooms']}}</p>
    <p>Location = {{$house['location']}}</p>
    <p>Description = {{$house['description']}}</p>
@endforeach
@else
    <p>there is no house available</p>
@endunless
