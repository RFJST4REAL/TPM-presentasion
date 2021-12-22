@extends("layouts.layouthome")
@section('container')
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Checkout</h2>
          <p class="lead">Check out your iventory now it's good for you.</p>
        </div>

        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Your cart</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Second product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Third item</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$ 21.00</strong>
              </li>
            </ul>

            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate="">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required="">
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required="">
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required="">
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Payment</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </form>
          </div>
        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017–2021 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>


        <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script><div id="ghostery-tracker-tally" class="ghostery-bottom ghostery-right ghostery-none ghostery-collapsed"><div id="ghostery-box"><div id="ghostery-count" style="background: none; color: rgb(255, 255, 255);">0</div><div id="ghostery-pb-icons-container"><span id="ghostery-breaking-tracker" class="ghostery-pb-tracker" title="Broken Page Trackers" style="background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8c3ZnIHdpZHRoPSIxOHB4IiBoZWlnaHQ9IjE4cHgiIHZpZXdCb3g9IjAgMCAxOCAxOCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4NCiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQwICgzMzc2MikgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+DQogICAgPHRpdGxlPmJyZWFraW5ncGFnZTwvdGl0bGU+DQogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+DQogICAgPGRlZnM+PC9kZWZzPg0KICAgIDxnIGlkPSJQdXJwbGUtQm94IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4NCiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTQxNi4wMDAwMDAsIC00NTMuMDAwMDAwKSIgaWQ9ImJhbSEtYnJlYWtpbmctdGhlLXBhZ2UtY29weS0yIiBmaWxsPSIjRkNCQTMzIj4NCiAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQxNi4wMDAwMDAsIDQ1My4wMDAwMDApIj4NCiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOSwwLjE5NTY1MjE3NCBDNC4xNDQzNjAyNSwwLjE5NTY1MjE3NCAwLjE5NTY1MjE3NCw0LjE0NDM2MDI1IDAuMTk1NjUyMTc0LDkgQzAuMTk1NjUyMTc0LDEzLjg1NTYzOTggNC4xNDQzNjAyNSwxNy44MDQzNDc4IDksMTcuODA0MzQ3OCBDMTMuODU1NjM5OCwxNy44MDQzNDc4IDE3LjgwNDM0NzgsMTMuODU1NjM5OCAxNy44MDQzNDc4LDkgQzE3LjgwNDM0NzgsNC4xNDQzNjAyNSAxMy44NTU2Mzk4LDAuMTk1NjUyMTc0IDksMC4xOTU2NTIxNzQgWiBNMTEuNDg1NTg5OSwxMy40MTA0NDQxIEwxMS4wNzcwNzk4LDEzLjAyMDY3NjggTDEyLjEwMDQ3MTEsMTIuMjE2OTU3OSBMMTEuMDQ2MjQ1MSwxMi4yMTY5NTc5IEwxMS4yMzQ0NzgxLDEwLjg3MDcwODcgTDkuODAzMTgxNDIsMTEuNzk1NzUxMiBMOS40MDMzMzczNCw5LjM0NTA5MzkyIEw4LjY5NDc0MjY5LDExLjA4NjU1MTkgTDcuMzI1NzIwMDksMTAuMTcwOTgxNSBMNy43NTI1Njk3NywxMS45Mjk1NyBMNi41NTQyNDY3MywxMi4zMTE0Nzc1IEw3Ljg4MjM1Nzg3LDEzLjQxMDQ0NDEgTDExLjQ4NTU4OTksMTMuNDEwNDQ0MSBaIE02LjcxNTY3NTcyLDEzLjQxMDQ0NDEgTDUuMDI4NjMxOTcsMTIuMDA2NzU3NiBMNi44Njg0Mzg3MywxMS40MzE5ODE4IEw2LjE2Mzg3NDc3LDguNDg4NTczMDkgTDguMzQ5MzEyODgsOS45NTk5NzUxMiBMOS43MDQwMjY1NCw2LjYxMjQ5MDE1IEwxMC4zNTAzNDcxLDEwLjU1NjcxODIgTDEyLjE5NDk5MDcsOS4zNzY1MzMyOCBMMTEuODk4OTM2OCwxMS40NzY5MjM5IEwxNC4yNjI5MzQzLDExLjQ3NjkyMzkgTDEyLjIxMjkyNzIsMTMuMDc4OTIwMiBMMTIuNTY3MjI0NSwxMy40MTA0NDQxIEwxNS4zMzEyNjc3LDEzLjQxMDQ0NDEgTDE0LjQ3Mzk0MDcsMTIuNTk4NjYzOSBMMTcuMjA3MzUwNiwxMC40NjY4MzM5IEwxMy4wNjA3ODIxLDEwLjQ2NjgzMzkgTDEzLjQ5NjI5NzcsNy4zNDg2OTUgTDExLjA5OTg1MzIsOC44Nzg5NDUwNSBMMTAuMTIxMjAyNiwyLjg5Mjc3MTMgTDcuODc3NzIyNTgsOC40MjU0OTI4NSBMNC41NzA1NDQ0Nyw2LjIwMzk4MDEgTDUuNjY1NDgwNDEsMTAuNzUwMzkyNyBMMi45NTEwMTQ3MiwxMS41OTgyNDc2IEw1LjEzNjQ1MjgzLDEzLjQxMDQ0NDEgTDYuNzE1Njc1NzIsMTMuNDEwNDQ0MSBaIiBpZD0iYnJlYWtpbmdwYWdlIj48L3BhdGg+DQogICAgICAgICAgICA8L2c+DQogICAgICAgIDwvZz4NCiAgICA8L2c+DQo8L3N2Zz4=&quot;); opacity: 0.5;"></span><span id="ghostery-slow-tracker" class="ghostery-pb-tracker" title="Slow Trackers" style="background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8c3ZnIHdpZHRoPSIxN3B4IiBoZWlnaHQ9IjE3cHgiIHZpZXdCb3g9IjAgMCAxNyAxNyIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4NCiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQwICgzMzc2MikgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+DQogICAgPHRpdGxlPnNsb3d0cmFja2VyczwvdGl0bGU+DQogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+DQogICAgPGRlZnM+PC9kZWZzPg0KICAgIDxnIGlkPSJQdXJwbGUtQm94IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4NCiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTM5NS4wMDAwMDAsIC00NTQuMDAwMDAwKSIgaWQ9InNsb3d0cmFja2VycyIgZmlsbD0iI0ZDQkEzMyI+DQogICAgICAgICAgICA8cGF0aCBkPSJNNDAzLjUsNDU0IEMzOTguODEyMjEsNDU0IDM5NSw0NTcuODEyMjEgMzk1LDQ2Mi41IEMzOTUsNDY3LjE4Nzc5IDM5OC44MTIyMSw0NzEgNDAzLjUsNDcxIEM0MDguMTg3NzksNDcxIDQxMiw0NjcuMTg3NzkgNDEyLDQ2Mi41IEM0MTIsNDU3LjgxMjIxIDQwOC4xODc3OSw0NTQgNDAzLjUsNDU0IFogTTQwOS42MDk1ODQsNDY1LjE3ODY1NCBDNDA5LjUzMDI1OSw0NjUuMTU0MDkgNDA4LjY3NzI4Myw0NjQuNzQ2NDIgNDA3LjU2MTA5MSw0NjQuMzYyNjM3IEM0MDguNDg0Mzc4LDQ2My43NDU2MSA0MDkuMDk0NDE4LDQ2Mi42OTM2NDUgNDA5LjA5NDQxOCw0NjEuNTAxNzMzIEM0MDkuMDk0NDE4LDQ1OS42MDU1ODEgNDA3LjU1MTQwMSw0NTguMDYyMzM4IDQwNS42NTUyNDksNDU4LjA2MjMzOCBDNDAzLjc1OTA5Nyw0NTguMDYyMzM4IDQwMi4yMTU4NTQsNDU5LjYwNTU4MSA0MDIuMjE1ODU0LDQ2MS41MDE3MzMgQzQwMi4yMTU4NTQsNDYyLjA0OTM1IDQwMi4zNDUyMDgsNDYyLjU2Njc2OSA0MDIuNTczMjY5LDQ2My4wMjY0OTcgQzQwMi43ODgwMzQsNDYzLjA2ODYzOCA0MDMuMzQ0NDQsNDYzLjE3NTIzMiA0MDQuMjIzNzgyLDQ2My4zMjM5NjggQzQwNS4yMDQ1MzUsNDYzLjQ5MDI4MSA0MDUuODUyNDM2LDQ2My4zNTY0MTkgNDA2LjM5MTAzOSw0NjIuODc2NjM0IEM0MDYuNzI4MTcyLDQ2Mi41NzY0NTkgNDA2LjkyODA2NCw0NjIuMTYzNjA2IDQwNi45NTM1MjksNDYxLjcxMzc5NCBDNDA2Ljk4MDEyMSw0NjEuMjYzOTgxIDQwNi44Mjk1ODMsNDYwLjgyOTk0NCA0MDYuNTI5NDA4LDQ2MC40OTM3MTIgQzQwNi4wNDY5MTksNDU5Ljk1MjQwNSA0MDUuMjE1MTI3LDQ1OS45MDM5NTMgNDA0LjY3MjY5Myw0NjAuMzg1NTQxIEM0MDQuMjM5NTU3LDQ2MC43NzExMjYgNDA0LjE4NTAyMSw0NjEuNDQ0NDkyIDQwNC41NTIxMjcsNDYxLjg1NzM0NiBDNDA0Ljg0MDEzMyw0NjIuMTgwNTA3IDQwNS4zNjk5NDcsNDYyLjIxNzQ2NiA0MDUuNjg2Nzk5LDQ2MS45MzU3NyBDNDA1LjgwMzk4NCw0NjEuODMxODggNDA1Ljg3MzM5NCw0NjEuNjkyODM1IDQwNS44ODA2MDYsNDYxLjU0NDc3NiBDNDA1Ljg4NjY5LDQ2MS40MjQyMSA0MDUuODUwNjMzLDQ2MS4zMTA2MyA0MDUuNzgwOTk4LDQ2MS4yMzQwMDkgQzQwNS43MTg1NzQsNDYxLjE2NTUgNDA1LjYxOTE5Miw0NjEuMTI3NjQxIDQwNS41MTY4OCw0NjEuMTI4NTQyIEM0MDUuNDI5ODkyLDQ2MS4xMzEwMjEgNDA1LjMxNzIxNCw0NjEuMTY1NSA0MDUuMjQ0MTk4LDQ2MS4yMzc2MTUgQzQwNS4yMjYzOTUsNDYxLjI1NDI5MSA0MDUuMjA0NTM1LDQ2MS4yNjQ4ODMgNDA1LjE3OTc0Niw0NjEuMjY0ODgzIEM0MDUuMTI2MTExLDQ2MS4yNjQ4ODMgNDA1LjA4MzA2OCw0NjEuMjE2NDMxIDQwNS4wODMwNjgsNDYxLjE1NzYxMyBDNDA1LjA4MzA2OCw0NjEuMTIxMzMxIDQwNS4wOTc5NDEsNDYxLjA5NDk2NCA0MDUuMTE2NDIxLDQ2MS4wNjk0OTggQzQwNS4yMjYzOTUsNDYwLjkxODk2IDQwNS4zODE0NCw0NjAuODMxNzQ3IDQwNS41MzUzNTksNDYwLjgxODY3NiBDNDA1Ljc0NDAzOSw0NjAuODAxMDk5IDQwNS45MTMwNTcsNDYwLjg2MDgxOCA0MDYuMDQ2OTE5LDQ2MS4wMDc3NTEgQzQwNi4xNzk4NzksNDYxLjE1NDAwNyA0MDYuMjQ5Mjg5LDQ2MS4zNDg0OSA0MDYuMjM3MTIsNDYxLjU2MzI1NSBDNDA2LjIyMzgyNCw0NjEuODA2MTkgNDA2LjExMjk0OCw0NjIuMDMyNDQ4IDQwNS45MjM2NDksNDYyLjIwMDU2NCBDNDA1LjQ1NzE2LDQ2Mi42MTYxMjIgNDA0LjcwNzE3Myw0NjIuNTY2MDkzIDQwNC4yODU1Myw0NjIuMDkzMjk0IEM0MDMuNzg5NzQ1LDQ2MS41MzU5ODcgNDAzLjg1ODQ3OSw0NjAuNjMyMDgxIDQwNC40MzUxNjcsNDYwLjExNzgxNyBDNDA1LjEyMzQwNyw0NTkuNTA1Mjk3IDQwNi4xODI1ODQsNDU5LjU2NjgyIDQwNi43OTQyMDIsNDYwLjI1NTI4NCBDNDA3LjE1NzAyNiw0NjAuNjYyNzMgNDA3LjM0MDAxNiw0NjEuMTg4MjYyIDQwNy4zMDg0NjYsNDYxLjczMzE3NCBDNDA3LjI3NjY5MSw0NjIuMjc4OTg4IDQwNy4wMzQ2NTgsNDYyLjc3OTA1NSA0MDYuNjI2OTg3LDQ2My4xNDE2NTQgQzQwNi4xNjgzODYsNDYzLjU1MDIyNiA0MDUuNjMyMjYyLDQ2My43NDY1MTIgNDA0Ljk0NjUwMiw0NjMuNzQ2NTEyIEM0MDQuNzA1MzcsNDYzLjc0NjUxMiA0MDQuNDQ0ODU3LDQ2My43MjE3MjIgNDA0LjE2MzE2Miw0NjMuNjc0Mzk3IEM0MDMuMTkyMDk5LDQ2My41MDk2NjIgNDAyLjE1NTAwNyw0NjMuMzI0ODY5IDQwMi4wMTU5NjIsNDYzLjMwNTQ4OCBDNDAxLjMxNzEzMSw0NjMuMjEyMTkxIDQwMC43MzYxNjEsNDYyLjczNzU4OSA0MDAuNzE3NjgyLDQ2Mi4wMzk2NTkgTDQwMC44OTQ1ODcsNDU4Ljk4NzY1MyBDNDAwLjg5NDU4Nyw0NTguNzkxMzY3IDQwMC43MzUyNiw0NTguNjMxMTM4IDQwMC41MzgwNzIsNDU4LjYzMTEzOCBDNDAwLjM0MDg4NSw0NTguNjMxMTM4IDQwMC4xODE1NTgsNDU4Ljc5MDQ2NSA0MDAuMTgxNTU4LDQ1OC45ODc2NTMgQzQwMC4xODE1NTgsNDU4Ljk4NzY1MyA0MDAuMjg1NDQ3LDQ2MC44NDE0MzcgNDAwLjI5NzYxNyw0NjEuMDc1NTgzIEM0MDAuMzIwNjAzLDQ2MS41MjAyMTIgMzk5LjkxMTEzLDQ2MS44NzY3MjYgMzk5LjQ2MDQxNiw0NjEuODc2NzI2IEMzOTguOTk4NDM1LDQ2MS44NzY3MjYgMzk4LjU4NzE1OSw0NjEuNTAwODMxIDM5OC42MjM0NDEsNDYxLjAzOTUyNiBDMzk4LjY0MzQ5OCw0NjAuNzg0MTk3IDM5OC42NjQ2ODIsNDYwLjUyMDA3OSAzOTguNjg1ODY1LDQ2MC4yNzI4NjIgTDM5OC43NTk3ODIsNDU5LjAwOTUxMiBDMzk4Ljc1OTc4Miw0NTguODEzMjI2IDM5OC42MDA0NTUsNDU4LjY1Mjk5OCAzOTguNDAzMjY4LDQ1OC42NTI5OTggQzM5OC4yMDYwOCw0NTguNjUyOTk4IDM5OC4wNDY3NTMsNDU4LjgxMjMyNSAzOTguMDQ2NzUzLDQ1OS4wMDk1MTIgTDM5OC4yMjAyNzgsNDYxLjk5OTk5NyBMMzk4LjIyMDI3OCw0NjIuMDA1MTggQzM5OC4yMjAyNzgsNDY0LjA5NzYxNyAzOTkuNDE3MzczLDQ2NS44MDI4OTIgNDAxLjUxMDcxMiw0NjUuODAxMDg5IEM0MDMuNjIyNTMxLDQ2NS43OTgzODUgNDA5LjYwODY4Myw0NjUuODAxMDg5IDQwOS42MDg2ODMsNDY1LjgwMTA4OSBDNDA5Ljc4MTA4MSw0NjUuODAxMDg5IDQwOS45MjAzNTEsNDY1LjY2MTE0MyA0MDkuOTIwMzUxLDQ2NS40ODk0MjEgQzQwOS45MjAzNTEsNDY1LjMxNzAyMyA0MDkuNzczMTkzLDQ2NS4yMzA3MTEgNDA5LjYwOTU4NCw0NjUuMTc4NjU0IFoiPjwvcGF0aD4NCiAgICAgICAgPC9nPg0KICAgIDwvZz4NCjwvc3ZnPg==&quot;); opacity: 0.5;"></span><span id="ghostery-non-secure-tracker" class="ghostery-pb-tracker" title="Non-secure Trackers" style="background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8c3ZnIHdpZHRoPSIxOHB4IiBoZWlnaHQ9IjE4cHgiIHZpZXdCb3g9IjAgMCAxOCAxOCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4NCiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDQwICgzMzc2MikgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+DQogICAgPHRpdGxlPndhcm5pbmc8L3RpdGxlPg0KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPg0KICAgIDxkZWZzPjwvZGVmcz4NCiAgICA8ZyBpZD0iUHVycGxlLUJveCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+DQogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zNzMuMDAwMDAwLCAtNDUzLjAwMDAwMCkiIGlkPSJ3YXJuaW5nIiBmaWxsPSIjRkVCMDMyIj4NCiAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDM3My4wMDAwMDAsIDQ1My4wMDAwMDApIj4NCiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOSwwLjYzMDQzNDc4MyBDNC4zODQxNDQ5MywwLjYzMDQzNDc4MyAwLjYzMDQzNDc4Myw0LjM4NDE0NDkzIDAuNjMwNDM0NzgzLDkgQzAuNjMwNDM0NzgzLDEzLjYxNTg1NTEgNC4zODQxNDQ5MywxNy4zNjk1NjUyIDksMTcuMzY5NTY1MiBDMTMuNjE1ODU1MSwxNy4zNjk1NjUyIDE3LjM2OTU2NTIsMTMuNjE1ODU1MSAxNy4zNjk1NjUyLDkgQzE3LjM2OTU2NTIsNC4zODQxNDQ5MyAxMy42MTU4NTUxLDAuNjMwNDM0NzgzIDksMC42MzA0MzQ3ODMgWiBNNC42NDI5MjgxMSwxMS43ODk4NTUxIEM1LjI1MDQxMTY1LDExLjc4OTg1NTEgNS43NTY5NTIzNCwxMS4zNjA3NTY3IDUuODc4NzE2OTMsMTAuODgxMzY5NSBDNi4wMDA0ODE1MiwxMS4zNjEyNDM3IDYuNTA3MDIyMjIsMTEuNzIzNzM2OSA3LjExNDM4NCwxMS43MjM3MzY5IEM3LjcyNDE4MTA2LDExLjcyMzczNjkgOC4yMzI2Njk5OSwxMS4zNjUwMTg0IDguMzUxNTEyMjMsMTAuODgyNzA4OSBDOC40NzA5NjMzLDExLjM2NTAxODQgOC45Nzk0NTIyMywxMS43MzY1MjIyIDkuNTg4NzYyMjQsMTEuNzM2NTIyMiBDMTAuMTk0NjYyOCwxMS43MzY1MjIyIDEwLjcwMTIwMzUsMTEuMzk0OTcyNSAxMC44MjM0NTUyLDEwLjkxNjU1OTQgQzEwLjk0NTcwNjgsMTEuMzk0OTcyNSAxMS40NTIyNDc1LDExLjc4OTM2OCAxMi4wNTgyNjk5LDExLjc4OTM2OCBDMTIuMzUzNjcwOCwxMS43ODkzNjggMTIuNjI0NzE4OCwxMS42OTkzODQgMTIuODM5NzU1LDExLjU1OTU5ODIgQzExLjAwOTUxMTUsOC43MTgwOTk3NSAxMi4xNDUzMzE2LDQuMTM3NjgxMTYgMTIuMTQ1MzMxNiw0LjEzNzY4MTE2IEM2Ljk0NjQ3MDYzLDUuMjMxNjE0MjQgNC42NjU4MTk4NSwxMC4xMDAzNzE0IDQuMDU3OTcxMDEsMTEuNjY2MTQyMiBDNC4yMzI5NDY3MywxMS43NDMyMTkyIDQuNDMxNzg4MzEsMTEuNzg5ODU1MSA0LjY0MjkyODExLDExLjc4OTg1NTEgWiIgaWQ9Indhcm5pbmd0cmFja2VycyI+PC9wYXRoPg0KICAgICAgICAgICAgPC9nPg0KICAgICAgICA8L2c+DQogICAgPC9nPg0KPC9zdmc+&quot;); opacity: 0.5;"></span></div><div id="ghostery-title">Looking</div><div id="ghostery-minimize"><span id="ghostery-minimize-icon"></span></div><span id="ghostery-close" style="background: url(&quot;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+DQo8c3ZnIHdpZHRoPSIxNXB4IiBoZWlnaHQ9IjE1cHgiIHZpZXdCb3g9IjAgMCAxNSAxNSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4NCiAgICA8IS0tIEdlbmVyYXRvcjogU2tldGNoIDMuNy4yICgyODI3NikgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+DQogICAgPHRpdGxlPmNvbGxhcHNlIGNvcHkgMjwvdGl0bGU+DQogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+DQogICAgPGRlZnM+PC9kZWZzPg0KICAgIDxnIGlkPSJQdXJwbGUtQm94IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4NCiAgICAgICAgPGcgaWQ9ImNvbGxhcHNlLWNvcHktMiI+DQogICAgICAgICAgICA8Y2lyY2xlIGlkPSJPdmFsLTMxNSIgZmlsbC1vcGFjaXR5PSIwLjI3MDE1Mzk4NiIgZmlsbD0iI0Q4RDhEOCIgY3g9IjcuNSIgY3k9IjcuNSIgcj0iNy41Ij48L2NpcmNsZT4NCiAgICAgICAgICAgIDxwYXRoIGQ9Ik00LjM2LDQuMzYgTDEwLjU3NDU2MzQsMTAuNTc0NTYzNCIgaWQ9IkxpbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLWxpbmVjYXA9InNxdWFyZSI+PC9wYXRoPg0KICAgICAgICAgICAgPHBhdGggZD0iTTQuMzYsNC4zNiBMMTAuNTc0NTYzNCwxMC41NzQ1NjM0IiBpZD0iTGluZS1Db3B5IiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS1saW5lY2FwPSJzcXVhcmUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcuNjAwMDAwLCA3LjYwMDAwMCkgc2NhbGUoLTEsIDEpIHRyYW5zbGF0ZSgtNy42MDAwMDAsIC03LjYwMDAwMCkgIj48L3BhdGg+DQogICAgICAgIDwvZz4NCiAgICA8L2c+DQo8L3N2Zz4=&quot;);"></span></div><div id="ghostery-pb-background"><div id="ghostery-trackerList"></div></div></div>

          <script src="form-validation.js"></script>
@endsection
