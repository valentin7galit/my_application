<template>
    <div>
        <div class="form-group row">
            <div class="col-6">
                <label for="fname">* First Name</label>
                <input v-model="$v.fname.$model" :class="{'is-invalid': validationStatus($v.fname)}" class="form-control" id="fname" type="text" name="fname">
                <p v-if="!$v.fname.required" class="invalid-feedback">The First Name field is required</p>
            </div>
            <div class="col-6">
                <label for="lname">* Last Name</label>
                <input v-model="$v.lname.$model" :class="{'is-invalid': validationStatus($v.lname)}" class="form-control" id="lname" type="text" name="lname">
                <p v-if="!$v.lname.required" class="invalid-feedback">The Last Name field is required</p>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <label for="email">* E-mail</label>
                <input v-model="$v.email.$model" :class="{'is-invalid': validationStatus($v.email)}" class="form-control" id="email" type="email" name="email">
                <p v-if="!$v.email.required" class="invalid-feedback">The E-mail field is required</p>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <label for="phone">Phone Number</label>
                <input v-model="phone" class="form-control" id="phone" type="tel" name="phone">
            </div>
            <div class="col-6"></div>
        </div>
        <p><span class="font-weight-bold">Country: </span>Republic of Moldova</p>
        <div class="form-group">
            <label for="address">* Address</label>
            <input v-model="$v.address.$model" :class="{'is-invalid': validationStatus($v.address)}" class="form-control" id="address" type="text" name="address">
            <p v-if="!$v.address.required" class="invalid-feedback">The Address field is required</p>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <label for="postal">* Postal Code</label>
                <input v-model="$v.postal.$model" :class="{'is-invalid': validationStatus($v.postal)}" class="form-control" id="postal" type="text" name="postal">
                <p v-if="!$v.postal.required" class="invalid-feedback">The Postal Code field is required</p>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <label for="city">* City</label>
                <input v-model="$v.city.$model" :class="{'is-invalid': validationStatus($v.city)}" class="form-control" id="city" type="text" name="city">
                <p v-if="!$v.city.required" class="invalid-feedback">The City field is required</p>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="form-check pb-3">
            <input class="form-check-input" type="checkbox" value="" id="check">
            <label class="form-check-label" for="check">
                I confirm that I have read the T-shirts.com terms and conditions of sale
            </label>
        </div>
        <h3 class="border-top border-secondary py-2">Payment</h3>
        <div class="form-group row">
            <div class="col-6">
                <label for="card_number">* Card Number</label>
                <input class="form-control" id="card_number" type="tel" name="card_number">
            </div>
            <div class="col-6">
                <label for="card_name">* Cardholder's Name</label>
                <input class="form-control" id="card_name" type="text" name="card_name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-6">
                <label for="card_date">* Expiration Date</label>
                <div class="row">
                    <div class="col-3">
                        <input class="form-control" id="card_date" type="tel" name="card_date">
                    </div>
                    <div class="col-3">
                        <input class="form-control" id="card_date" type="tel" name="card_date">
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
            <div class="col-6">
                <label for="card_code">* Security code</label>
                <div class="row">
                    <div class="col-3">
                        <input class="form-control" id="card_code" type="tel" name="card_code">
                    </div>
                    <div class="col-9">3 digits on the back</div>
                </div>
            </div>
        </div>
        <div class="py-1">
            <button @click.prevent="submit()" type="submit" class="btn btn-secondary w-100">Send the Order</button>
        </div>
    </div>
</template>

<script>
import { required } from 'vuelidate/lib/validators'
export default {
    name: "DeliveryDetailsComponent",
    data() {
        return {
            fname: '',
            lname: '',
            email: '',
            phone: '',
            address: '',
            postal: '',
            city: ''
        }
    },
    validations: {
        fname: { required },
        lname: { required },
        email: { required },
        phone: { required },
        address: { required },
        postal: { required },
        city: { required }
    },
    methods: {
        validationStatus(validation) {
            return typeof validation != "undefined" ? validation.$error : false;
        },
        submit() {
            /* $touch - Sets the $dirty(A flag representing if the field under validation was touched by the user at least once)
                flag of the model and all its children to true recursively. */
            this.$v.$touch();
            
            if (this.$v.$pending || this.$v.$error) {
                return false;
            }

            document.getElementById('formshipping').submit();
            localStorage.setItem('cart', JSON.stringify([]));
        }   
    }
}
</script>
