package com.example.dacfusion.services

import com.example.dacfusion.model.response.LoginResponse
import com.example.dacfusion.model.User

import retrofit2.Call
import retrofit2.http.Body
import retrofit2.http.Field
import retrofit2.http.FormUrlEncoded

import retrofit2.http.POST

interface loginUser {

    @POST("auth/login")
    fun login(@Body user: User): Call<LoginResponse>
}


//@Field("email") email:String ,
//@Field("password") password:S
// @Field("email") email: String,
//        @Field("password") password: String,
//        @Field("device_name") device_name: Stringtring
//@FormUrlEncoded
