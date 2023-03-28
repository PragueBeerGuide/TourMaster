import React from "react";
import { useState } from "react";

import {
    Card,
    Input,
    Checkbox,
    Button,
    Typography,
    Select,
    Option
  } from "@material-tailwind/react";

  
  
export default function SignUpInfo({ formData, setFormData }) {
    const [value, setValue] = useState()

  return (
    <Card color="transparent" shadow={false}>
      <form className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
      <div className="mb-4 flex flex-col gap-6">
    
        <Input
      
          type="text"
          required
          placeholder="First Name"
          value={formData.firstName}
          onChange={(event) =>
            setFormData({ ...formData, firstName: event.target.value })
          }
        />
        </div>
        <div className="mb-4 flex flex-col gap-6">
        <Input
          
          type="text"
          required
          placeholder="Last Name"
          value={formData.lastName}
          onChange={(event) =>
            setFormData({ ...formData, lastName: event.target.value })
          }
        />
        </div>
      <div className="mb-4 flex flex-col gap-6">
        <Input
        
          type="email"
          required
          placeholder="Email..."
          value={formData.email}
          onChange={(event) =>
            setFormData({ ...formData, email: event.target.value })
          }
        />
        </div>
        <div className="mb-4 flex flex-col gap-6">
      
          
        <Input
          type="text"
          required
          placeholder="Phone Number"
          value={formData.telephone}
      onChange={(event) =>
          setFormData({ ...formData, telephone: event.target.value })
        }
        />
        </div>
      </form>    
    </Card>
  );
}

