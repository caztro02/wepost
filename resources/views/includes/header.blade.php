<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
</head>  
<div class="ui inverted segment">
        <div class="ui container">
            <div class="ui inverted secondary menu">
                <div class="item">
                    <i class="plane icon app-icon"></i>
                </div>
                    <div class="right item">
                      <a href="/signup">Signup</a>
                    </div>
            </div>
        </div>
    </div>


<form class="ui large form container">
        <div class="ui stacked segment">
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="email" placeholder="E-mail address">
                </div>
            </div>
            <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="ui fluid large teal submit button">Login</div>
        </div>
        <div class="ui error message"></div>
    </form>
    <div class="striped"></div>
    </div>

    <form class="ui fluid form">
                <div class="field">
                  <input placeholder="First name" type="text">
                  <div class="ui pointing label">
                    Please enter a value
                  </div>
                </div>
                <div class="ui divider"></div>
                <div class="field" placeholder="Last Name">
                  <div class="ui pointing below label">
                    Please enter a value
                  </div>
                  <input type="text">
                </div>
                <div class="ui divider"></div>
                <div class="inline field">
                  <input placeholder="Username" type="text">
                  <div class="ui left pointing label">
                    That name is taken!
                  </div>
                </div>
                <div class="ui divider"></div>
                <div class="inline field">
                  <div class="ui right pointing label">
                    Your password must be 6 characters or more
                  </div>
                  <input type="password">
                </div>
              </form>

              <button class="ui icon button">
                        <i class="cloud icon"></i>
                      </button>

                      <h3 class="ui inverted header">
                                Top Attached
                              </h3>
                              <div class="ui attached segment">
                                <p></p>
                              </div>
                              <h3 class="ui attached header">
                                Attached
                              </h3>
                              <div class="ui attached segment">
                                <p></p>
                              </div>
                              <h3 class="ui bottom attached header">
                                Bottom Attached
                              </h3>

                              <div class="ui icon menu">
                                        <a class="item">
                                         <i class="ui basic image label">
                                        <img src="/images/back2.jpg">
                                        Elliot
                                         </i>
                                        </a>
                                        <a class="item">
                                          <a href=""><h4>{{ $value->email }}</h4></a>
                                        </a>
                                        <a class="item">
                                          <i class="video play icon"></i>
                                        </a>
                                      </div>