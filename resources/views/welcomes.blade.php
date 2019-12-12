@include('layout.head')

<section class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1">
                        <div class="submit-form col-md-12" style="background: #ffffff; margin: 25px 0;">
                            <h4>Check availability for <em>direction</em>:</h4>
                            <span  id="form-submit" >
                                <div class="row">
                                    <div class="col-md-2">
                                        <fieldset>
                                            <label for="from">From:</label>
                                            <select required name='from' onchange='this.form.()'>
                                                <option value="">Select a location...</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-2">
                                        <fieldset>
                                            <label for="to">To:</label>
                                            <select required name='to' onchange='this.form.()'>
                                                <option value="">Select a location...</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="India">India</option>

                                            </select>
                                        </fieldset>
                                    </div>
                                    <?php /* ?>
                                    <div class="col-md-2">
                                        <fieldset>
                                            <label for="departure">Departure date:</label>
                                            <input name="deparure" type="text" class="form-control date" id="deparure" placeholder="Select date..." required onchange='this.form.()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <fieldset>
                                            <label for="return">Return date:</label>
                                            <input name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required onchange='this.form.()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio-select">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="round">Round</label>
                                                    <input type="radio" name="trip" id="round" value="round" requiredonchange='this.form.()'>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="oneway">Oneway</label>
                                                    <input type="radio" name="trip" id="oneway" value="one-way" requiredonchange='this.form.()'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 <?php */ ?>
                                    <div class="col-md-2">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="btn" style="margin-top: 32px;">Order Ticket Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>


<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div id="app">
                        <span v-bind:message="message"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('resources/img/contact-01.jpg') }}" alt="">
                <h6>Proin dignissim rhoncus</h6>
                <p>Aliquam lectus.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('resources/img/contact-02.jpg') }}" alt="">
                <h6>Duis vel rhoncus lectus</h6>
                <p>Mauris aliquet eget loet commodo ultricies.</p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        }
    })
</script>

@include('layout.foot')