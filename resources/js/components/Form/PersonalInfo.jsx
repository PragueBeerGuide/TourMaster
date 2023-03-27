import { Card } from "@material-tailwind/react";
import React, { useState } from "react";
import Updater from "./Button";
import Confirmation from "./Confirmation";


  
  export default function PersonalInfo({ formData, setFormData }) {

    return (
        <>
            <Card color="transparent" shadow={false}>
                <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
                    <div className="mb-4 flex flex-col gap-6"></div>

                    <div>
                        Adults: 400 kč:&nbsp;&nbsp;
                        <Updater
                            setCount={() => setFormData({...formData, count : Math.max(formData.count - 1, 0)})}
                            value={formData.negcount}
                        />
                        &nbsp;&nbsp;{formData.count}&nbsp;&nbsp;
                        <Updater
                            setCount={() => setFormData({...formData, count : formData.count + 1})}
                            value={formData.pluscount}
                        />
                         
                    </div>
                </div>
                
            </Card>
        </>
    );
   
}



