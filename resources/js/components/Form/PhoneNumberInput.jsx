import React from "react";
import { useForm, Controller } from "react-hook-form";
import PhoneInput, { isValidPhoneNumber } from "react-phone-number-input";
// import "react-phone-number-input/style.css";


export default function PhoneNumberInput() {

    const {
        handleSubmit,
        formState: { errors },
        control
      } = useForm();
      
      
    const onSubmit = (data) => {
        console.log({data});
    };

    const handleValidate = (value) => {
        const isValid = isValidPhoneNumber(value);
        console.log({ isValid })
        return isValid
    }

    return (
    <form onSubmit={handleSubmit(onSubmit)} className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
        <div className="mb-4 flex flex-col gap-6">
            <label htmlFor="phone-input">Phone Number</label>
            <div className="flex flex-row w-5 bg-red-400">
            <Controller
            name="phone-input"
            control={control}
            rules={{
               validate: (value) => handleValidate(value)
             }}
            render={({ field: { onChange, value } }) => (
                <PhoneInput 
                className="w-5"
                value={value}
                onChange={onChange}
                defaultCountry="US"
                id="phone-input"
                />
            )}
            />
            </div>
        </div>
    </form>
    );
}