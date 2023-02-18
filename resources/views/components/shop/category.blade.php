        <div class="row mt60">
          <div class="col-lg-3 col-xl-2 d-none d-lg-block">
            <div class="sidebar_accordion_widget">
              <div class="faq_according text-start">
                <div class="accordion" id="accordionExample">
                    <h4>All Category</h4>
                    <hr class="mb50">
                  @foreach(app('categories') as $category)
                  <div class="card">
                    <div class="card-header">
                      <h4>
                        <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $category->slug }}" aria-expanded="true" aria-controls="{{ $category->slug }}">
                          {{ $category->name }}
                        </button>
                      </h4>
                    </div>
                    <div id="{{ $category->slug }}" class="collapse" aria-labelledby="headingZero" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="left_sidebar_department_widgets">
                          <ul class="list-unstyled ps-0">
                            @foreach($category->subCategories as $subCategory)
                              <li class="container"><a href="{{ route('shop'). '?sub-category='. $subCategory->slug }}" class="child_list">{{ $subCategory->name }}</a></li>
                            @endforeach
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

