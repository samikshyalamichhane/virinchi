<table class="table table-bordered">
    <thead>
      <p>Message from {{$detail->name}}</p>
    </thead>
    <tbody>
      <tr class="success">
        <td>Name</td>
        <td>{{$detail->name}}</td>
      </tr>
      <tr class="success">
        <td>Email</td>
        <td>{{$detail->email}}</td>
      </tr>
      <tr class="success">
        <td>Phone Number</td>
        <td>{{ $detail->phone}}</td>
      </tr>
      <tr class="success">
        <td>Program</td>
        <td>{{$detail->program}}</td>
      </tr>

      <tr class="success">
        <td>When Would You Like To Start?</td>
        <td>{{$detail->start_time}}</td>
      </tr>
      <tr class="success">
        <td>Highest Level Of Education</td>
        <td>{{$detail->highest_level_of_education}}</td>
      </tr>
      <tr class="success">
        <td>High School</td>
        <td>{{$detail->high_school}}</td>
      </tr>

      <tr class="success">
        <td>How Did You Hear About Us?</td>
        <td>{{$detail->how_did_you_hear_about_us}}</td>
      </tr>
      <tr class="success">
        <td>Question</td>
        <td>{{$detail->question}}</td>
      </tr>
      

    </tbody>
  </table>
