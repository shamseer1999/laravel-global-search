@extends('layout.template')
@section('content')
<div class="card mt-2">
    <div class="card-header">
      Lilac
      
    </div>
    <div class="card-body">
        <div class="form-outline">
            
                @csrf
            <input type="text" value="" name="search" id="form1" class="form-control" placeholder="Search name/designation/department" aria-label="Search" onchange="get_result()" />
        
        </div>
        <div class="card-body" id="display">
            <div class="row" id="hidden" style="display:none;"></div>
            <div class="row" id="origin">
                @if (!empty($results))
                    @foreach ($results as $item)
                        
                            <div class="col-lg-5 m-5 border border-secondary">
                                <p id="show"><b>{{$item->name}}</b><br>
                                {{$item->designation->name}}<br>
                                {{$item->department->name}}</p>
                                
                            </div>
                        
                    @endforeach
                @endif
            </div>
            
        </div>
        
      
    </div>
  </div>
  <script>
    function get_result()
    {
        var search=$('#form1').val();
        if(search =='')
        {
            location.reload();
        }else{
            $.ajax({
        url:"{{route('search')}}",
        method:'GET',
        data:{search:search},
        success:function(data){
            out=JSON.parse(data)
            console.log(out)
            $.each(out,function(index,value){
                console.log(value,"dfndsfd")
                var htm="";
                $.each(this,function(k,i){
                    htm+="<div class='col-lg-5 m-5 border border-secondary'><p><b>"+i.name+"</b><br>"+i.designation.name+"<br>"+i.department.name+"</p></div>";
                    // console.log(i.department.name,"dfnddddddddddddddddddddsfd")
                    $('#origin').css('display','none')
                    $('#hidden').css('display','block')
                    $('#hidden').html(htm)
                   
                })
            })
           
        }
       });
        }
       
    }
  </script>
@endsection
