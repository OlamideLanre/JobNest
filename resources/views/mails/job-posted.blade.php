<h2>{{ $job->title }}</h2>
<p> 
    Congrats! your mail is now live on our website!
</p>
<a href="{{ url('/jobs/'.$job->id) }}"> View your job </a>