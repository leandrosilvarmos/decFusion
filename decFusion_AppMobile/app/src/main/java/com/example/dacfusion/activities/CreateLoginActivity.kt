package com.example.dacfusion.activities

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.example.dacfusion.R
import kotlinx.android.synthetic.main.activity_create_login.*

class CreateLoginActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_create_login)

        btn_createlogin_cliente.setOnClickListener {
            val intent = Intent(this , CreateuserClienteActivity::class.java)
            startActivity(intent)
        }

        btn_createlogin_profissionais.setOnClickListener {
            val intent = Intent(this , CreateuserProfissionalActivity::class.java)
            startActivity(intent)
        }

    }
}