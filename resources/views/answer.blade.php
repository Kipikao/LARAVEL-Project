<h1>Raspunde</h1>
<form method="post" action="{{ route('question.answerStore') }}">
    @csrf
    @method('post')
   
    <div>
        <label>Raspuns</label>
        <input type="text" name="answer" placeholder="Mesaj" />
    </div>
    <div>
        <input type="submit" value="Trimite raspuns" />
    </div>

</form>