import React from "react";
import moment from "moment";
import { useState } from "react";
import Calendar from "react-calendar";


// import { personalInfo } from "./PersonalInfo";
import {
    Card,
    Input,
    Checkbox,
    Button,
    Typography,
    H3,
} from "@material-tailwind/react";

export default function Confirmation({ formData, setFormData }) {
    const date=Calendar

    // console.log(formData);

   
    
    return (
       
        <Card color="transparent" shadow={false}>
          <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
               <div className="mb-4 flex flex-col gap-6">
                   
                       <strong>
                           You've selected {formData.count} adults for {formData.count*400}Kč
                           on {moment(formData.date).format("MMMM Do YYYY")}.
                       </strong>
                
               </div>
           </div>
         </Card> 
    );
}
