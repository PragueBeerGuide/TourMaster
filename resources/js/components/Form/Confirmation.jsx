import React from "react";

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
    // console.log(count)
    return (
       
        <Card color="transparent" shadow={false}>
          <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
               <div className="mb-4 flex flex-col gap-6">
                   
                       <strong>
                           You've selected {formData.count} adults at....Kč
                           on...
                       </strong>
                
               </div>
           </div>
         </Card> 
    );
}
