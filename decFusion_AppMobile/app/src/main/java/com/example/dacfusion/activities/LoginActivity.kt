package com.example.dacfusion.activities

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Toast
import com.example.dacfusion.R
import com.example.dacfusion.model.response.LoginResponse
import com.example.dacfusion.retrofit.Retrofit
import com.example.dacfusion.sessionConfig.SessionManager
import kotlinx.android.synthetic.main.activity_login.*
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class LoginActivity : AppCompatActivity() {

//    private lateinit var sessionManager: SessionManager
//    private lateinit var ApiConfig: ApiConfig

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_login)

        btnLogin_user.setOnClickListener {
            val email = etEmail_user.text.toString().trim()
            val senha = etSenha_user.text.toString().trim()

            if(email.isEmpty()){
                etEmail_user.error =  "Email e obrigatorio"
                etEmail_user.requestFocus()
                return@setOnClickListener
            }

            if (senha.isEmpty()){
                etSenha_user.error =  "Senha é obrigatoria"
                etSenha_user.requestFocus()
                return@setOnClickListener
            }


//
//            Retrofit.instance.login(email, senha,"app")
//                .enqueue(object: Callback<LoginResponse>{
//                    override fun onResponse(
//                        call: Call<LoginResponse>,
//                        response: Response<LoginResponse>
//                    ) {
//                        SessionManager.getInstance(applicationContext).saveUser(response.body()!!.user)
//                        Toast.makeText(applicationContext, "Login efetuado com sucesso!", Toast.LENGTH_LONG).show()
//                        startActivity(Intent(this@LoginActivity, HomeActivity::class.java))
//
//                    }
//
//                    override fun onFailure(call: Call<LoginResponse>, t: Throwable) {
//                        Toast.makeText(applicationContext, "Email ou senha estão incorretos!", Toast.LENGTH_LONG).show()
//                    }
//
//                })
        }
        txt_novo_usuario.setOnClickListener {
            val intent  =  Intent(this , CreateLoginActivity::class.java)
            startActivity(intent)
        }





        }




//        fun login(){
//            val request: UserRequest()
//            request.email = etEmail_user.text.toString().trim()
//            request.password = etSenha_user.text.toString().trim()
//
//            val retrofit = Retrofit().getRetrofitInterface().create(loginUser::class.java)
//            retrofit.login(request).enqueue(object : Callback<LoginResponse>{
//                override fun onResponse(call: Call<LoginResponse>, response: Response<LoginResponse> ) {
//                    val user = response.body()
//                    Log.e("token", user!!.data?.token)
//                }
//
//                override fun onFailure(call: Call<LoginResponse>, t: Throwable) {
//                    Toast.makeText(this@LoginActivity , "Api não funcionando" , Toast.LENGTH_LONG).show()
//                    Log.e("Login" , "login" , t)
//
////                    Log.e("Erro" , t.message)
////                    Toast.makeText(context, "Api não funcionando" , Toast.LENGTH_LONG).show()
////                    Log.e("Produtos" , "getProdutos" , t)
//
//                }
//
//            })
//        }


        }







