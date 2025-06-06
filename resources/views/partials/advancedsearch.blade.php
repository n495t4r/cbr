
<link href=" {{asset('css/advancedsearch.css')}} " rel="stylesheet" />

{{-- modal for advanced search --}}
<div class="modal fade" id="advSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg s010" role="document">
      <div class="modal-content" style=" opacity:0.9 !important; ">
        <div class="modal-body">

            <div class="s01" >
                
                <form action="search" method="get">
                  {{ csrf_token() }}
                  <div class="inner-form">
                    {{-- <div class="basic-search">
                      <div class="input-field">
                        <input id="search" type="text" placeholder="Type Keywords" />
                        <div class="icon-wrap">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                          </svg>
                        </div>
                      </div>
                    </div> --}}
                    <input type="hidden" name="include" value="getProgrammeRelation">
                    <input type="hidden" name="fields[getProgrammeRelation]" value="progCode,name">
                    <div class="advance-search">
                    <div class="modal-header">
                      <span class="desc">Advanced Search</span>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      
                    </div>
                      <div class="row" >
                        <div class="input-field" id="table_filter">

                        </div>
                      </div>
                      <div class="row second">
                        <div class="input-field">
                          <div class="input-select">
                            <input type="date" name="filter[dob]" id="search" placeholder="Date" >
                          </div>
                        </div>
                        <div class="input-field">
                          <div class="date">
                            <select data-trigger="" name="filter[marital_status]">
                              <option placeholder="" value="">marital status</option>
                              <option value="Married">Married</option>
                              <option value="Single">Single</option>
                            </select>
                          </div>
                        </div>
                        <div class="input-field">
                          <div class="input-select">
                            <select data-trigger="" name="filter[progID]">
                              <option placeholder="" value="">Programme</option>
                              <option value="progCode">Npower</option>
                              <option value="cct">CCT</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row third">
                        <div class="input-field">
                          <div class="result-count">
                            <span>108 </span>results</div>
                          <div class="group-btn">
                            <button class="btn-delete" id="delete">RESET</button>
                            <button class="btn-search">SEARCH</button>
                          </div>
                        </div>
                        {{-- {{$form->daterangepicker('date_range', 'Date range')}} --}}
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <script src=" {{asset('js/extention/choices.js')}} "></script>
              <script>
                const customSelects = document.querySelectorAll("select");
                const deleteBtn = document.getElementById('delete')
                const choices = new Choices('select',
                {
                  searchEnabled: false,
                  itemSelectText: '',
                  removeItemButton: true,
                });
                for (let i = 0; i < customSelects.length; i++)
                {
                  customSelects[i].addEventListener('addItem', function(event)
                  {
                    if (event.detail.value)
                    {
                      let parent = this.parentNode.parentNode
                      parent.classList.add('valid')
                      parent.classList.remove('invalid')
                    }
                    else
                    {
                      let parent = this.parentNode.parentNode
                      parent.classList.add('invalid')
                      parent.classList.remove('valid')
                    }
                  }, false);
                }
                deleteBtn.addEventListener("click", function(e)
                {
                  e.preventDefault()
                  const deleteAll = document.querySelectorAll('.choices__button')
                  for (let i = 0; i < deleteAll.length; i++)
                  {
                    deleteAll[i].click();
                  }
                });
          
              </script>
              
              
            </div>
      </div>
    </div>
</div>
