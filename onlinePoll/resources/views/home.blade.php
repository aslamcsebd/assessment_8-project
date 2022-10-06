@extends('layouts.app')
@section('content')
<div class="container">   

   @include('includes.alertMessage')
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header p-0">
               <ul class="nav nav-pills" id="tabMenu">
                  <li class="nav-item">
                     <a class="nav-link active btn-sm py-1 m-1" data-toggle="pill" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link btn-sm py-1 m-1" data-toggle="pill" href="#addVote">Add vote</a>
                  </li>
               </ul>
            </div>

            <div class="card-body p-1">
               <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane fade show active" id="home">
                     <div class="card border border-danger">
                        <div class="card-header p-1">
                           <button class="btn btn-sm btn-success text-light" data-toggle="modal" data-original-title="test" data-target="#addQuestion">Add question</button>
                        </div>
                        <div class="card-body p-1">
                           <table class="table table-bordered">
                              <thead class="bg-info text-center text-white py-0">
                                 <tr class="py-0">
                                    <th>Sl</th>
                                    <th>Question</th>
                                    <th>
                                       <span class="float-left">Option</span>
                                       
                                       <b class="float-right">Vote %</b>
                                    </th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach($answered as $item)
                                    @php
                                       $totalVoter = App\Models\AnswerList::where('questionId', $item->id)->get()->count();
                                    @endphp
                                    <tr>
                                       @php
                                          $rowspan =$item->getOption->count();
                                          $totalRow = $rowspan+1;
                                       @endphp
                                       <td width="5%" rowspan="{{$totalRow}}">{{$loop->iteration}}</td>
                                       <td rowspan="{{$totalRow}}">{{$item->question}}</td>           
                                                                       
                                       @foreach($item->getOption as $option)
                                          @php
                                             $optionVoter = App\Models\AnswerList::where('questionId', $item->id)
                                                ->where('optionId', $option->id)
                                                ->get()->count();
                                             if($totalVoter){
                                                $voteRate = round(($optionVoter/$totalVoter)*100, 1);
                                             }else{
                                                $voteRate = 0;
                                             }
                                          @endphp
                                          <tr>
                                             <td  width="30%" class="py-0 {{($option->answer==true)?'bg-success text-white':''}}">
                                                {{ chr(96+ $loop->iteration) }}) {{$option->option}} 
                                                <b class="float-right ext-danger">
                                                   {{($voteRate!=0) ? $voteRate.'%' : ''}}
                                                </b>
                                             </td>
                                             @if($loop->iteration==1)
                                                <td rowspan="{{$totalRow}}" width="5%" class="text-center ">
                                                   <a href="{{ url('itemDelete', ['question_lists', $item->id, 'home'])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you want to delete this?')">Delete</a>
                                                </td>
                                             @endif
                                          </tr>
                                       @endforeach
                                                                      
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>                         
                  </div>

                  <div class="tab-pane fade show" id="addVote">
                     <div class="card border border-danger">
                        <div class="card-body p-1">
                           <table class="table table-bordered">
                              <thead class="bg-info text-center text-white py-0">
                                 <tr class="py-0">
                                    <th>Sl</th>
                                    <th>Question</th>
                                    <th>Option</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach($notAnswered as $item)
                                    <tr>
                                       @php
                                          $rowspan =$item->getOption->count();
                                          $totalRow = $rowspan+1;
                                       @endphp
                                       <td width="5%" rowspan="{{$totalRow}}">{{$loop->iteration}}</td>
                                       <td rowspan="{{$totalRow}}">{{$item->question}}</td>           
                                                                       
                                       <form action="{{ Route('addVote') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                                          @foreach($item->getOption as $option)
                                             <tr>
                                                @csrf
                                                <input type="hidden" name="questionId" value="{{$item->id}}">
                                                <td width="30%" class="py-0">
                                                   <input type="radio" id="{{$option->id}}" name="optionId" value="{{$option->id}}">
                                                   <label class="mb-0" for="{{$option->id}}">
                                                      {{ chr(96+ $loop->iteration) }}) {{$option->option}}                                                
                                                   </label>
                                                </td>
                                                @if($loop->iteration==1)
                                                   <td rowspan="{{$totalRow}}" width="8%" class="p-0 text-center">
                                                      <button class="btn btn-sm btn-success">Vote now</button>
                                                   </td>
                                                @endif
                                             </tr>
                                          @endforeach                                                                      
                                       </form>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>  
                  </div>
   
               </div>            
            </div>
         </div>
      </div>
   </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="addQuestion" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h6 class="modal-title pl-2" id="exampleModalLabel">Add question & answer option</h6>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
         </div>

         <div class="modal-body">
            <form action="{{ Route('addQuestion') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
               @csrf
               <div class="form-group">
                  <label for="question">Add question*</label>
                  <textarea type="text" name="question" class="form-control" row="2" id="question" placeholder="Enter question hare" required></textarea>
               </div>
               <fieldset>
                  <legend>Value options</legend>
                  <div id="extraDropdown">
                     <div class="row justify-content-center">
                        <i class="fa fa-chevron-down pt-3"></i>
                        <div class="col-8 form-group">
                           <input type="text" name="dropdownValue[]" class="form-control" placeholder="Value name" 2required/>
                        </div>
                        <button type="button" class="btn">
                           <i class="fa fa-trash "></i>
                        </button>
                     </div>                  
                  </div>
                  <div class="row justify-content-center"> 
                     <div class="col-8">
                        <button type="button" id="addExtraDropdown" class="btn btn-sm btn-primary ">
                           <i class="fa fa-plus">&nbsp; </i>Add dropdown
                        </button>
                     </div>
                  </div>
               </fieldset>
               <div class="modal-footer">
                  <div class="btn-group">
                     <button class="btn btn-sm btn-primary">Save</button>
                     <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div> 
@endsection
