import React from "react";
import {
    Card,
    Input,
    Checkbox,
    Button,
    Typography,
  } from "@material-tailwind/react";

export default function SignUpInfo({ formData, setFormData }) {
  return (
    <Card color="transparent" shadow={false}>
    <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
    <div className="mb-4 flex flex-col gap-6">
      <Input
        type="text"
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
        placeholder="Password..."
        value={formData.password}
        onChange={(event) =>
          setFormData({ ...formData, password: event.target.value })
        }
      />
      </div>
      <div className="mb-4 flex flex-col gap-6">
      <Input
        type="text"
        placeholder="Confirm Password..."
        value={formData.confirmPassword}
        onChange={(event) =>
          setFormData({ ...formData, confirmPassword: event.target.value })
        }
      />
      </div>
    </div>
        
         </Card>
  );
}

